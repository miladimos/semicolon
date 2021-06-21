<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUUID;

    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'uuid'];

    protected $dates = ['deleted_at'];
}
