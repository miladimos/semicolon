<?php

namespace App\Http\Controllers\Site;

use App\Models\Faq;
use App\Models\Tag;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Category;

class SiteController extends Controller
{
    public function index()
    {
//        auth()->loginUsingId(1);

        // auth()->logout();

        $this->seo()->setTitle('Blogging ...');

        return view('site.index');
    }

    public function user(User $user)
    {
        $this->seo()->setTitle($user->label);

        return view('site.blog.author', compact('user'));
    }

    public function aboutUs()
    {
        $this->seo()->setTitle('about us');

        return view('site.pages.about');
    }

    public function contactUs()
    {
        $this->seo()->setTitle('contact us');

        return view('site.pages.contact');
    }

    public function tag(Tag $tag)
    {
        $this->seo()->setTitle('by tag' . $tag->name);

        return view('site.blog.tag', compact('tags'));
    }

    public function tags()
    {
        $this->seo()->setTitle('tags');

        return view('site.pages.tags', compact('tags'));
    }

    public function category(Category $category)
    {
        $this->seo()->setTitle('by category' . $category->name);

        return view('site.blog.category', compact('categorys'));
    }

    public function categories()
    {
        $this->seo()->setTitle('categories');

        return view('site.pages.categories', compact('categories'));
    }

    public function faqs()
    {
        $this->seo()->setTitle('faqs');

        $faqs = Faq::latest()->get();

        return view('site.pages.faqs', compact('faqs'));
    }
}
