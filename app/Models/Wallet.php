<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
