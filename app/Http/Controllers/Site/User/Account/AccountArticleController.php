<?php

namespace App\Http\Controllers\Site\User\Account;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class AccountArticleController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')->get();
        $articles = auth()->user()->articles;

        $popularArticles = Article::orderBy('view_count')->latest()->get();
        // $articles = Cache::remember('articles', 120, function () {
        //     return DB::table('articles')->get();
        // });

        return view('site.account.articles', compact('articles'));

        // return view('site.blog.index', compact('articles', 'categories', 'popularArticles'));
    }

    public function show(User $user, Article $article)
    {
        $this->seo()->setTitle($article->title);
        $article->increment('view_count');
        $nextArticle = [];
        $prevPrev = [];
        $sameArticles = [];

        return view('site.blog.single', compact('article', 'sameArticles'));
    }

    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('site.account.create-article', compact('categories', 'tags'));
    }

    public function store(ArticleRequest $request)
    {
        $article = auth()->user()->articles()->create($request->all());

        return redirect()->route('site.article')->with('success', 'پیام شما ثبت شد و در صورت نیاز با شما تماس گرفته می شود');
    }
}
