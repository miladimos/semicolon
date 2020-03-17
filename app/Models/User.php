<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password',
    ];

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
        return "@$this->username";
    }

//    public function getFullNameAttributes()
//    {
//        return $this->profile->first_name . $this->profile()->last_name;
//    }
//
//    public function roles()
//    {
//        return $this->belongsToMany(Role::class);
//    }
//
//    public function hasAnyRole($roles)
//    {
//        if(is_array($roles)){
//            foreach ($roles as $role){
//                if($this->hasRole($role)) {
//                    return true;
//                }
//            }
//        } else {
//            if($this->hasRole($roles)) {
//                return true;
//            }
//        }
//        return false;
//    }
//
//    public function hasRole($role)
//    {
//        if($this->roles()->where('name', $role)->first()) {
//            return true;
//        }
//        return false;
//    }













    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
