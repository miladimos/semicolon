<?php

namespace App\Models;

use App\Models\Contact;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class ContactSubject extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'contact_subjects';

    // protected $fillable = ['title', 'active'];

    protected $guarded = [];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
