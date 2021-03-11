<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        HasProfilePhoto,
        HasTeams,
        Notifiable,
        TwoFactorAuthenticatable,
        HasUUID;


    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function path()
    {
        return url("@$this->username");
    }

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }

    public function getFullNameAttribute()
    {
        return $this->profile->fname . $this->profile->lname;
    }



    //    /**
    //     * The attributes that are mass assignable.
    //     *
    //     * @var array
    //     */
    //    protected $fillable = [
    //        'username', 'email', 'password',
    //    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
