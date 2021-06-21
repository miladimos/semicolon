<?php

namespace App\Models;

use App\Models\ContactSubject;
use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory,
        HasUUID,
        SoftDeletes;

    protected $table = 'contacts';

    // protected $fillable = ['name', 'call', 'subject_id', 'body'];

    protected $guarded = [];

    public function subject()
    {
        return $this->belongsTo(ContactSubject::class);
    }
}
