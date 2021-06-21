<?php

namespace App\Http\Controllers\Webmaster\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('پرداخت ها');

        $payments = Payment::latest()->paginate(20);
        return view('webmaster.payments.all', compact('payments'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت پرداخت جدید');

        return view('webmaster.payments.create');
    }

    public function store(Request $request)
    {
        // return $request->all();

        $payment = Payment::create([
            'name' => $request->name,
            'active' => $request->active ? true : false
        ]);

        return redirect()->route('webmaster.payments.index')->with('success', 'پرداخت مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Payment $payment)
    {
        //
    }

    public function edit(Payment $payment)
    {
        $this->seo()->setTitle('ویرایش پرداخت');

        return view('webmaster.payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'active' => $request->active ? true : false
        ]);
        return redirect()->route('webmaster.payments.index')->with('success', 'پرداخت مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('webmaster.payments.index')->with('success', 'پرداخت مورد نظر با موفقیت حذف شد.');
    }
}
