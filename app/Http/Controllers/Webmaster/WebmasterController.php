<?php

namespace App\Http\Controllers\Webmaster;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;

class WebmasterController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('پنل مدیریت');

        $earnings = DB::table('payments')->where('payment', 1)->sum('amount');
        // $teacherCount = User::
        $articleCount = Article::count();
        $userCount = User::count();
        return view('webmaster.index', compact('earnings', 'articleCount', 'userCount'));
    }
}
