<?php

namespace App\Providers;

use App\Events\Auth\UserLoggedin;
use App\Events\Auth\UserRegistered;
use App\Listeners\Auth\UserLoggedinListener;
use App\Listeners\Auth\UserRegisteredListener;
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
