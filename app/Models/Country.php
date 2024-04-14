<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Country extends Model
{
    use HasFactory,
        Sluggable,
        HasUUID;

    protected $table = 'countries';

    protected $fillable = ['title', 'slug', 'province_id', 'uuid'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
