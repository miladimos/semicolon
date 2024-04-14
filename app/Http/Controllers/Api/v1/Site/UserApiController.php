<?php

namespace App\Http\Controllers\Api\V1\Site;

use App\Models\User;
use App\Http\Controllers\Controller;


class UserApiController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return response()->json($users);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }
}
