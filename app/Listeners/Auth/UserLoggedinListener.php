<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UserLoggedin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLoggedinListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserLoggedin  $event
     * @return void
     */
    public function handle(UserLoggedin $event)
    {
        // $event->user->notify(new SendEmailVerificationNotification());
    }
}
