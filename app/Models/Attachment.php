<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Attachment extends Model
{
    use HasFactory, HasUUID;

    protected $table = 'attachments';

    protected $fillable = ['title'];
}
