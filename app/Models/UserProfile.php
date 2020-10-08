<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

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
