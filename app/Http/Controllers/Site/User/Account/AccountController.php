<?php

namespace App\Http\Controllers\Site\User\Account;

use App\Http\Controllers\Controller;
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

    public function notifications()
    {
        return view('site.account.notifications');
    }

    public function courses()
    {
        $learnings = auth()->user()->learnings;
        return view('site.account.courses', compact('learnings'));
    }

    public function referral()
    {
        return view('site.account.referral');
    }

    public function payments()
    {
        $payments = auth()->user()->payments;
        $amount = auth()->user()->wallet->amount;
        return view('site.account.payments', compact('payments', 'amount'));
    }

}
