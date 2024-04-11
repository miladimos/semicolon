<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Wallet extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'wallets';

    // protected $fillable = ['user_id', 'cash', 'uuid'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
