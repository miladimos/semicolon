<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discount extends Model
{
    use HasFactory,
        Sluggable,
        HasUUID,
        SoftDeletes;

    protected $table = 'discounts';

    protected $guarded = [];

    // protected $fillable = ['title', 'slug', 'description', 'percent', 'type', 'start_at', 'end_at', 'uuid', 'user_count'];

    protected $dates = ['start_at', 'end_at'];

    protected $casts = [
        'active' => 'boolean',
        'infinity' => 'boolean',
    ];

    public $types = [
        'g' => 'global',
        'c' => 'course',
        'u' => 'user',
    ];

    public function courses()
    {
        return $this->morphedByMany(Course::class, 'discountables');
    }

    // public function categories()
    // {
    //     return $this->morphedByMany(Category::class, 'discountables');
    // }

    public function users()
    {
        return $this->morphedByMany(User::class, 'discountables');
    }

    // public function courses()
    // {
    //     return $this->belongsToMany(Course::class);
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }


    public function path()
    {
        return "/discounts/$this->slug";
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
