<?php

namespace App\Mail\Site\Auth;

use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerificationMale extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $token = UserVerify::create([
            'user_id' => $this->user->id,
            'type' => 'email',
            'token' => Crypt::encrypt(Str::random(5))
        ]);

        $url = url(route('auth.email.verify', $token->token));
        return $this->view('emails.site.auth.email-verification')->with([
            'url' => $url,
        ]);
    }
}
