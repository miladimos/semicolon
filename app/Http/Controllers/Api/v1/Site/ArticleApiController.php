<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Article;
use App\Http\Controllers\Controller;


class ArticleApiController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return response()->json($articles);
    }

    public function show(Article $article)
    {
        $article->increment('view_count');

        return response()->json($article);
    }

}
