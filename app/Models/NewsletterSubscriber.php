<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'newsletter_subscribers';

    protected $fillable = ['email', 'uuid'];
}
