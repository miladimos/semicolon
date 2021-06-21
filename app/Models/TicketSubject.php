<?php

namespace App\Models;

use App\Traits\HasUUID;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketSubject extends Model
{
    use Sluggable,
        HasUUID,
        SoftDeletes;

    protected $table = 'ticket_subjects';

    protected $fillable = ['title', 'slug'];

    // protected $guarded = [''];


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
