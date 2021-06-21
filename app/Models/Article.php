<?php

namespace App\Models;

use App\Models\Comment;
use App\Traits\HasUUID;
use App\Scope\ActiveScope;
use App\Traits\HasAuthor;
use App\Traits\HasComment;
use App\Traits\HasTags;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    use HasFactory,
        Sluggable,
        SoftDeletes,
        HasUUID,
        HasComment,
        HasTags,
        HasAuthor;

    protected $table = 'articles';

    // protected $fillable = [
    //     'title', 'slug', 'description', 'body', 'viewCount',
    //     'category_id', 'image_url', 'uuid', 'active', 'deleted_at'
    // ];

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

    public function path()
    {
        return "/@$this->user->username/$this->slug";
    }

    public function url()
    {
        return url($this->path());
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
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
