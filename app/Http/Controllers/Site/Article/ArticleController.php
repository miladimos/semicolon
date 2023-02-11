<?php

namespace App\Http\Controllers\Site\Article;

use App\Models\User;
use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

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
        return view('site.articles.all', compact('articles'));
    }

    public function show(User $user, Article $article)
    {
        dd($article, $user);
        $this->seo()->setTitle($article->title);
        $article->increment('viewCount');

        return view('site.blog.single', compact('article'));
    }
}
