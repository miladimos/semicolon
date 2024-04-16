<?php

namespace App\Http\Controllers\Site\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserRegistered;
use App\Http\Requests\Auth\RegisterRequest;
use Response;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        $this->seo()->setTitle('Register');
        return view('site.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->create($request);

        if (!$user) {
            return false;
        }

        auth()->login($user, true);

        event(new UserRegistered($user));

        return Response::success('site.index', 'Registered Successfully.');;
    }

    public function create($request)
    {
        $user =  User::create($request->only('username', 'email', 'password'));
        return $user;
    }
}
