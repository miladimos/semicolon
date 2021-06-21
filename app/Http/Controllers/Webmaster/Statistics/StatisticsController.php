<?php

namespace App\Http\Controllers\Webmaster\Statistics;

use App\Models\Book;
use App\Models\User;
use App\Models\Course;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\Podcast;
use App\Models\Newsletters;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;

class StatisticsController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('آمار');

        $users = User::count();
        $courses = Course::count();
        $episodes = Episode::count();
        $comments = Comment::count();
        $articles = Article::count();
        $podcasts = Podcast::count();
        $newsletters = Newsletters::count();
        $newsletterSubscribers = NewsletterSubscriber::count();
        $books = Book::count();
        $earnings = DB::table('payments')->where('payment',1)->sum('amount');

        return view('webmaster.statistics.statistics', get_defined_vars());
    }
}
