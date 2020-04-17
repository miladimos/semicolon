<?php

namespace App\Providers;

use App\Repositories\ArticleRepository\ArticleRepositoryInterface;
use App\Repositories\ArticleRepository\EloquentArticleRepository;
use App\Repositories\TagRepository\EloquentTagRepository;
use App\Repositories\TagRepository\TagRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
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
        $this->app->bind(TagRepositoryInterface::class,EloquentTagRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class,EloquentArticleRepository::class);
    }
}
