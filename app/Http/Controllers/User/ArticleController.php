<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('site.user.article.create');
    }

    public function drafts()
    {
        return view('site.user.article.drafts');
    }
}
