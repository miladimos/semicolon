<?php

namespace App\Http\Controllers\Site\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;

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

    public function single(Article $article)
    {
        dd($article);
        // $this->seo()->setTitle("دوره" . $article->title);
        $article->increment('viewCount');

        return view('site.articles.single', compact('article'));
    }
}
