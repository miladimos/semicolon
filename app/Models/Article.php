<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use Sluggable, SoftDeletes;

    protected $fillable = ['title','slug','description','body','viewCount', 'tags', 'category_id', 'image_url'];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

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
