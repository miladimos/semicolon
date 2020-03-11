<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use Sluggable, SoftDeletes, Viewable;

    protected $fillable = ['title','slug','description','body','viewCount', 'tags', 'category_id', 'image_url'];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function path()
    {
        return "/article/$this->slug";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
