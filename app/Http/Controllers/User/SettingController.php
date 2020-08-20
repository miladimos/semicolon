<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting()
    {
        $user = auth()->user();
        return view('site.user.setting.setting', compact('user'));
    }

    public function update(Request $request)
    {
        return $request->all();
    }
}
