<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->paginate(20);
        return view('home', compact('articles'));
    }

    public function articleSingle(Article $article)
    {
        views($article)->record();
        return view('article', compact('article'));
    }

//    public function tredis()
//    {
////        if(cache()->has('articles')) {
////            $articles = cache('articles');
////        } else {
////            $articles = Article::latest()->get();
////            \cache(['articles'=>$articles], Carbon::now()->addMinutes(5));
////        }
//
////        $views= Redis::incr("views");
//
//
////        Redis::incr("views.{$article->id}.articles");
////        return $views;
////
////        $v = cache()->put('mili', 'milivavlue', 20);
////
////        $vv =   \cache()->put('tevvv','vsdvsdv',3);
////        return cache()->store("redis")->get('tevvv');
//
//        if(! Storage::exists('/uploads')) {
//            Storage::makeDirectory('/uploads');
//            return "ok";
//        }else {
//            return "exists";
//        }
//    }
}
