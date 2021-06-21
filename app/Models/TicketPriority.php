<?php

namespace App\Models;

use App\Traits\HasUUID;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketPriority extends Model
{
    use Sluggable,
        HasUUID,
        SoftDeletes;


    protected $table = 'ticket_priorities';


    protected $fillable = ['title', 'slug', 'active', 'uuid'];

    // protected $guarded = [''];


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
