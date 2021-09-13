<?php

namespace App\Http\Controllers\Site\Auth;

use Exception;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Site\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('site.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->create($request);

        if (!$user) {
            return false;
        }

        auth()->login($user, true);

        // event(new UserRegistered($user));

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
