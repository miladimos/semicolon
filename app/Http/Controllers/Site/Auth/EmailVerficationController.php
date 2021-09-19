<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Site\Auth\SendEmailVerificationNotification;
use App\Traits\EmailVerifiy;

class EmailVerficationController extends Controller
{
    use EmailVerifiy;

    public function verify(Request $request)
    {
        $token = $this->getToken($request->token);
        if (!$token) {
            return back()->with('error', 'token invalid');
        }

        $verified = $this->verifyEmail($request->token);
        if (!$verified) {
            return back()->with('error', 'invalid token');
        }

        return redirect()->route('site.index')->with('success', 'email verified successfully');
    }

    public function requestEmailVerification()
    {
        $user = user();
        $user->notify(new SendEmailVerificationNotification());
        return redirect()->back();
    }
}
