<?php

namespace App\Http\Controllers\Site\User\Account;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('site.account.profile', compact('user'));
    }

    public function account()
    {
        $user = auth()->user();
        return view('site.account.account', compact('user'));
    }

    public function settingForm()
    {
        return view('site.account.setting');
    }
}
