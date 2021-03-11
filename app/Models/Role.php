<?php

namespace App\Models;

class Role extends \Spatie\Permission\Models\Role
{

    protected $fillable = ['fa_name','guard_name', 'name', 'description'];

}
