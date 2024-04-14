<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Miladimos\Toolkit\Traits\HasUUID;


class Profile extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'profiles';

    ///    protected $fillable = [
    ////        'telegram', 'twitter', 'instagram', 'github', 'gitlab', 'virgol', 'atbox',
    ////        'phone', 'facebook', 'linkedin', 'avatar'
    ////    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
