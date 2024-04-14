<?php

namespace App\Http\Controllers\Site\Article;

use App\Models\User;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')->get();
        $articles = Article::latest()->get();

        $popularArticles = Article::orderBy('view_count')->latest()->get();
        // $users = Cache::remember('users', 120, function () {
        //     return DB::table('users')->get();
        // });

        // Post::select('id', 'title')
        //     ->when($request->status, function ($query, $status) {
        //         return $query->where('status', $status);
        //     })
        //     ->when($request->limit, function ($query, $limit) {
        //         return $query->limit($limit);
        //     })

        //     /* ... */

        //     ->get();
        return view('site.blog.index', compact('articles', 'categories', 'popularArticles'));
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
}
