<?php

namespace App\Listeners\Site\Article;

use App\Notifications\Site\Article\SendArticleCreatedNotificationToAdmin;
use App\Notifications\Site\Article\SendArticleCreatedNotificationToUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ArticleCreatedListener implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admin_emale = conf('admin_email');
        Notification::route('mail', $admin_emale)
            ->notify(new SendArticleCreatedNotificationToAdmin($event->article));
        $event->article->user->notify(new SendArticleCreatedNotificationToUser($event->article));
    }
}
