<?php

namespace App\Providers;

use App\Repositories\ArticleRepository\ArticleRepositoryInterface;
use App\Repositories\ArticleRepository\EloquentArticleRepository;
use App\Repositories\TagRepository\EloquentTagRepository;
use App\Repositories\TagRepository\CategoryRepositoryInterface;
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
        $this->app->bind(CategoryRepositoryInterface::class,EloquentTagRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class,EloquentArticleRepository::class);
    }
}
