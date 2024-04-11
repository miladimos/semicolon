<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Miladimos\Toolkit\Traits\HasUUID;

class Menu extends Model
{
    use HasFactory, HasUUID;

    protected $table = 'menus';

    protected $guarded = [];

    // protected $fillable = [''];

}
