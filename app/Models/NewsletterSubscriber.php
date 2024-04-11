<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Miladimos\Toolkit\Traits\HasUUID;

class NewsletterSubscriber extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'newsletter_subscribers';

    protected $fillable = ['email', 'uuid'];
}
