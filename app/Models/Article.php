<?php

namespace App\Models;

use App\Traits\HasUUID;
use App\Scope\ActiveScope;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    use HasFactory,
        Sluggable,
        SoftDeletes,
        HasUUID;

    protected $table = 'articles';

    protected $fillable = ['title', 'slug', 'description', 'body', 'viewCount', 'category_id', 'image_url'];

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public static function booted()
    {
        static::addGlobalScope(new ActiveScope());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', 1);
    }


    //    public function path()
    //    {
    //        return "/@$this->user->username/$this->slug";
    //    }
    //
    //    public function category()
    //    {
    //        return $this->belongsTo(Category::class);
    //    }
    //
    //    public function tags()
    //    {
    //        return $this->belongsToMany(Tag::class);
    //    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
