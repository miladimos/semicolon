<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Faq extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUUID;

    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'uuid'];

    protected $dates = ['deleted_at'];
}
