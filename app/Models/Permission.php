<?php

namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $fillable = ['fa_name', 'guard_name', 'name', 'description'];
}
