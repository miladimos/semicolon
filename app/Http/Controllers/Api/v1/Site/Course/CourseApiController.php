<?php

namespace App\Http\Controllers\Api\v1\Site\Course;

use App\Models\Course;
use App\Models\Paymnet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Learning;
use App\Models\Payment;
use SoapClient;

class CourseApiController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        // Post::select('id', 'title')
        //     ->when($request->status, function ($query, $status) {
        //         return $query->where('status', $status);
        //     })
        //     ->when($request->limit, function ($query, $limit) {
        //         return $query->limit($limit);
        //     })

        //     /* ... */

        //     ->get();
        return view('site.courses.all', compact('courses'));
    }

    public function single(Course $course)
    {
        $this->seo()->setTitle(" دوره "  . $course->title);
        $course->increment('viewCount');

        return view('site.courses.single', compact('course'));
    }


    public function registerCourse(Request $request)
    {
        $user = auth()->user();

        // $user->learnings()->attach($request->course_id);
    }

    public function payment(Request $request, Course $course)
    {

        if (auth()->user()->checkLearning($course)) {
            alert()->error('شما دوره را خریداری کرده اید', 'خطا');
            return back();
        }

        if ($course->price === 0 || $course->type === 'vip' || $course->type === 'free') {
            alert()->error('خطا', 'خطا');
            return back();
        }

        $user = auth()->user();

        $price = $course->price;

        $MerchantID = 'test'; //Required
        $Amount = $price; //Amount will be based on Toman - Required
        $Description = $course->title; // Required
        $Email = $user->email; // Optional
        $Mobile = $user->email; // Optional
        $CallbackURL = url('/courses/payment/callback'); // Required

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

        if ($result->Status === 100) {
            auth()->user()->payments()->create([
                'resnumber' =>  $result->Authority,
                'amount' => $price,
                'course_id' => $course->id,
            ]);
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
        } else {
            echo 'ERR ' . $result->Status;
        }
    }

    public function callback(Request $request)
    {
        $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
        $Authority = $request->get('Authority');

        $payment = Payment::where('resnumber', $Authority)->firstOrFail();
        $course = Course::findOrFail($payment->course_id);

        $Amount = $course->price;

        if ($request->Status === 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price,
                ]
            );

            if ($result->Status == 100) {
                if ($this->addUserForLearning($payment, $course)) {
                    alert()->success('Transation success. RefID:' . $result->RefID, 'fsd');
                    return redirect($course->path());
                }
            } else {
                echo 'Transation failed. Status:' . $result->Status;
            }
        } else {
            alert()->error('Transaction canceled by use', 'Transaction canceled by use');
        }
    }


    protected function addUserForLearning($payment, $course)
    {
        $payment->update([
            'payment' => true,
        ]);

        Learning::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id
        ]);

        return true;
    }
}
