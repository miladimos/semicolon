<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFollow\Followable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, Followable, HasRoles;

//    protected $fillable = [
//        'username', 'email', 'password','level',
//    ];

    protected $guarded = [];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function path()
    {
        return url("@$this->username");
    }

//    public function getFullNameAttributes()
//    {
//        return $this->profile->first_name . $this->profile()->last_name;
//    }
//
//    public function setPasswordAttribute($value)
//    {
//        $this->attributes['password'] = bcrypt($value);
//    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
