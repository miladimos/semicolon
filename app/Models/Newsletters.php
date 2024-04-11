<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Newsletters extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUUID;

    protected $table = 'newsletters';

    protected $dates = ['deleted_at'];

    protected $fillable = ['email', 'uuid', 'deleted_at'];
}
