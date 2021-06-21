<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletters extends Model
{
    use HasFactory,
        SoftDeletes,
        HasUUID;

    protected $table = 'newsletters';

    protected $dates = ['deleted_at'];

    protected $fillable = ['email', 'uuid', 'deleted_at'];
}
