<?php

namespace App\Http\Controllers\Webmaster;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class WebmasterController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('پنل مدیریت');

        $earnings = DB::table('payments')->where('payment', 1)->sum('amount');
        // $teacherCount = User::
        $courseCount = Course::count();
        $userCount = User::count();
        return view('webmaster.index', compact('earnings', 'courseCount', 'userCount'));
    }
}
