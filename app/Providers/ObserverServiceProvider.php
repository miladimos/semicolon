<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Article;
use App\Observers\UserObserver;
use App\Observers\ArticleObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Article::observe(ArticleObserver::class);
    }
}
