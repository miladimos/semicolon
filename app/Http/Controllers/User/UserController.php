<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $user)
    {
//        return $user;
        return view('site.user.profile.profile', compact('user'));
    }
}
