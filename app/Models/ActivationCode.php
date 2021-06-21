<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    use HasFactory;

    protected $table = 'activation_codes';

    // protected $fillable = ['user_id', 'code', 'expired_at', 'type'];

    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeVerifyCode($query, $user, $code)
    {
        return (bool) $user->activateCode()->whereCode($code)->where('expired_at', '>', now())->first();
        // return !! $user->activateCode()->whereCode($code)->where('expired_at','>',now())->first();
    }

    public function scopeGenerateCode($query, $user)
    {
        $user->activateCode()->delete();

        do {
            $code = mt_rand(100000, 900000);
        } while ($this->checkCodeIsUnique($user, $code));

        $user->activationCodes()->create([
            'code' => $code,
            'expired_at' => now()->addMinutes(3)
        ]);

        return $code;
    }
}
