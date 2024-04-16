<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Profile;
use App\Models\ActivationCode;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Miladimos\Toolkit\Traits\HasUUID;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        HasUUID;


    protected $table = 'users';


    //    protected $fillable = [
    //        'username', 'email', 'password',
    //    ];

    protected $guarded = [];


    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];



    protected $appends = ['profile'];

    public function metas()
    {
        return $this->morphOne(UserMeta::class, 'metaable');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class,);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'author_id');
    }

    public function activationCodes()
    {
        return $this->morphMany(ActivationCode::class, 'codeable');
    }

    public function commented()
    {
        return $this->morphMany(Comment::class, 'commentorable');
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

    public function isMobileVerified()
    {
        return (bool) $this->metas->mobile_verified_at;
    }

    public function verifyMobile()
    {
        return (bool) $this->metas()->update([
            'mobile_verified_at' => now(),
        ]);
    }

    public function isEmailVerified()
    {
        return (bool) $this->metas->email_verified_at;
    }

    public function verifyEmail()
    {
        return (bool) $this->metas()->update([
            'email_verified_at' => now(),
        ]);
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

    // public function getLabelAttribute()
    // {
    //     return $this->profile->fname . ' ' . $this->profile->lname . ' - ' . $this->username;
    // }

    // public function getFullNameAttribute()
    // {
    //     return $this->profile->fname . ' ' . $this->profile->lname;
    // }


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
