<?php

namespace App\Http\Controllers\Site\Auth\Password;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;

use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetPasswordForm(Request $request)
    {
        $urlToken = $request->route()->parameter('token');

        $token = PasswordReset::where('token', $urlToken)->first();
        if (!$token) {
            return;
        }

        return view('site.auth.password.reset')->with(
            ['token' => $token->token, 'email' => $token->email]
        );
    }

    public function resetPasswordEmail(Request $request)
    {
        $request->validate([
            'email' => 'string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string'
        ]);

        $passwordReset = PasswordReset::where([
            'token' => $request->token,
            'email' => $request->email,
        ])->first();

        if (!$passwordReset) {
            return back()->with('toast_error', 'This password reset token is invalid.');
        }

        $user = User::where('email', $passwordReset->email)->first();
        if (!$user) {
            return back()->with('toast_error', "We can't find a user with that e-mail address.");
        }

        $user->password = $request->password;
        $user->save();
        $passwordReset->delete();
        //        $user->notify(new UserResetPasswordSuccess($passwordReset));
        return redirect()->route('auth.login.form')->with('toast_success', 'password changed');
    }
}
