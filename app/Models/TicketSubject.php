<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Miladimos\Toolkit\Traits\HasUUID;

class TicketSubject extends Model
{
    use Sluggable,
        SoftDeletes,
        HasUUID;

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
