<?php

namespace App\Providers;

use App\Repositories\Tag\TagRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Tag\TagEloquentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * define your repositories here
     */
    protected $repositories = [
        [
            TagEloquentRepositoryInterface::class,
            TagRepository::class
        ],
    ];

    public function register()
    {
        foreach ($this->repositories as $repository) {
            $this->app->bind($repository[0], $repository[1]);
        }
    }
}
