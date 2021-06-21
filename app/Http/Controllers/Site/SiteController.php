<?php

namespace App\Http\Controllers\Site;

use App\Models\Faq;
use App\Models\Tag;
use App\Models\User;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function index()
    {
//        auth()->loginUsingId(1);

        // auth()->logout();

        $this->seo()->setTitle('پلتفرمی برای حرفه ای شدن');

        return view('site.index');
    }

    public function user(User $user)
    {
        dd($user);
        $this->seo()->setTitle($user->label);

        return view('site.user');
    }


    public function aboutUs()
    {
        $this->seo()->setTitle('درباره ما');

        return view('site.pages.about-us');
    }

    public function contactUs()
    {
        $this->seo()->setTitle('درباره ما');

        return view('site.pages.contact');
    }


    public function tags(Tag $tag)
    {
        $this->seo()->setTitle('برچسب ها');

        return view('site.pages.tags', compact('tags'));
    }

    public function faqs()
    {
        $this->seo()->setTitle('سوالات متداول');

        $faqs = Faq::latest()->get();

        return view('site.pages.faq', compact('faqs'));
    }
}
