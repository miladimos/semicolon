<?php

namespace App\Providers;

use App\Events\Site\Auth\UserLoggedin;
use App\Events\Site\Auth\UserRegistered;
use App\Listeners\Site\Auth\UserLoggedinListener;
use App\Listeners\Site\Auth\UserRegisteredListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        UserRegistered::class => [
            UserRegisteredListener::class,
        ],

        UserLoggedin::class => [
            UserLoggedinListener::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
