<?php

namespace App\Http\Controllers\Site\Newsletters;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Http\Controllers\Site\SiteController;

class NewslettersSubscriberController extends SiteController
{

    public function subscribe(Request $request)
    {
        $data = $request->validate(['email' => 'required|email|unique:newsletter_subscribers,email']);

        $existingSubscription = NewsletterSubscriber::whereEmail($data['email'])->first();

        if ($existingSubscription) {
            if ($existingSubscription->trashed()) {
                $existingSubscription->restore();
            }
        } else {
            $subscription = NewsletterSubscriber::create(['email' => $data['email']]);
            if ($subscription) {
                return back()->with('success', 'با موفقیت عضو سیستم خبرنامه شدید');
            }
        }

        return back()->with('error', 'error');
    }

    public function unsubscribe(Request $request)
    {
        $data = $request->validate(['email' => 'required|email"unique:newsletter_subscribers,email']);

        $existingSubscription = NewsletterSubscriber::whereEmail($data['email'])->first();

        if ($existingSubscription) {
            $existingSubscription->delete();
        }

        return back('با موفقیت از عضویت سیستم خبرنامه خارج شدید');
    }
}
