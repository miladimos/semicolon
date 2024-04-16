<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Profile;
use App\Models\UserMeta;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Cache;

class UserObserver
{

    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(User $user)
    {
        $user->uuid = (string) Uuid::generate(4);
    }

    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        Profile::create([
            'user_id' => $user->id
        ]);

        UserMeta::create([
            'metaable_id' => $user->id,
            'metaable_type' => get_class($user),
        ]);

        Cache::forget('users');
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        Cache::forget('users');
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        Cache::forget('users');
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        Cache::forget('users');
    }
}
