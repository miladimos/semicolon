<?php

namespace App\Http\Controllers\Webmaster;

use App\Models\User;
use Carbon\Carbon;
use App\Jobs\SendMailJob;
use App\Mail\NewArrivals;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function getUsers(){

        return User::all();
    }

    public function getMessages(){

        return Message::orderBy('created_at', 'desc')->get();
    }

    public function sendMail(Request $request)
    {

        $message = new Message();
        $message->title = $request->title;
        $message->body = $request->body;
        $message->save();

        if($request->item == "now") {

            $message->delivered = 'YES';
            $message->send_date = Carbon::now();
            $message->save();

            $users = User::all();

            foreach($users as $user) {
                dispatch(new SendMailJob($user->email, new NewArrivals($user, $message)));
            }

            return response()->json('Mail sent.', 201);

        } else {

            $message->date_string = date("Y-m-d H:i", strtotime($request->send_date));

            $message->save();

            return response()->json('Notification will be sent later.', 201);
        }
    }
}
