<?php

namespace App\Http\Controllers\Site\Newsletters;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\NewsletterSubscriber;
use App\Http\Controllers\Site\SiteController;
use App\Http\Requests\Api\v1\Webmaster\Newsletters\NewslettersRequest;

class NewslettersSubscriberController extends SiteController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param NewslettersRequest $request
     * @return JsonResponse
     */
    public function unsubscribe(Request $request)
    {
        $data = $request->validate(['email' => 'required|email"unique:newsletter_subscribers,email']);

        $existingSubscription = NewsletterSubscriber::whereEmail($data['email'])->first();

        if ($existingSubscription) {
            $existingSubscription->delete();
        }

        return back('با موفقیت عضو سیستم خبرنامه شدید');
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate(['email' => 'required|email|unique:newsletter_subscribers,email']);

        $existingSubscription = NewsletterSubscriber::withTrashed()->whereEmail($data['email'])->first();

        if ($existingSubscription) {
            if ($existingSubscription->trashed()) {
                $existingSubscription->restore();
            }
        } else {
            $subscription = NewsletterSubscriber::create(['email' => $data['email']]);
        }

        return back('با موفقیت عضو سیستم خبرنامه شدید');
    }
}
