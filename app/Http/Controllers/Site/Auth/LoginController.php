<?php

namespace App\Http\Controllers\Site\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Auth\LoginRequest;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('site.auth.register');
    }

    public function register(LoginRequest $request)
    {
        $user = $this->create($request);

        if(!$user) {
            return false;
        }

        auth()->login($user, true);

        // event(new UserLogined($user));

        return redirect()->route('site.index')->with('success');
    }

    public function create($request)
    {
        $user =  User::create($request->except('fname', 'lname', 'password_confirmation'));
        $user->profile()->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
        ]);
        return $user;
    }
}
