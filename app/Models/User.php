<?php

namespace App\Models;

use App\Traits\HasUUID;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        HasProfilePhoto,
        HasTeams,
        Notifiable,
        TwoFactorAuthenticatable,
        HasUUID;


    protected $table = 'users';


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
        'full_name',
    ];

    // public static function booted()
    // {
    //     static::addGlobalScope(new ActiveScope());
    // }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function activationCodes()
    {
        return $this->morphMany(ActivationCode::class, 'codeable');
    }

    // public function emailVerifyToken()
    // {
    //     return UserVerify::where([
    //         'user_id' => $this->id,
    //         'type' => 'email',
    //     ])->first();
    // }

    public function isAdmin()
    {
        return !!$this->is_admin;
    }

    public function isPhoneActivated($phone)
    {
        if ($this->where('phone', $phone)->first() && !is_null($this->phone_verified_at))
            return true;
        return false;
    }

    public function isEmailActivated()
    {
        return !!$this->email_verified_at;
    }

    public function isCurrentPhoneActivated()
    {
        return !!$this->phone_verified_at;
    }

    public function isActivate()
    {
        return $this->isEmailActivated() && $this->isCurrentPhoneActivated();
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function getLabelAttribute()
    {
        return $this->profile->fname . ' ' . $this->profile->lname . ' - ' . $this->username;
    }
    public function getAvatarAttribute()
    {
        return isset($this->profile->avatar) ? asset("/public/avatars/default.jpg") : asset($this->profile->avatar);
    }

    public static function generateUsername()
    {
        do {
            $digits   = array_merge(range(0, 9), range(0, 9), range(0, 9));
            $sChars   = range('a', 'z');
            $cChars   = range('A', 'Z');
            $chars    = array_merge($digits, $sChars, $cChars);
            $arrToStr = implode("", $chars);
            $shuf     = str_shuffle($arrToStr);
            $username     = 'wrp_' . substr($shuf, 0, 8);
            $exist    = true;

            if (!static::where('username', $username)->exists()) {
                $exist = false;
                return $username;
            }
        } while ($exist);
    }

    public function getFullNameAttribute()
    {
        return $this->profile->fname . ' ' . $this->profile->lname;
    }

    public function path()
    {
        return "@$this->username";
    }

    public function url()
    {
        return url($this->path());
    }

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }
}
