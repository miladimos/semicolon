<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Miladimos\Toolkit\Traits\HasAuthor;
use Miladimos\Toolkit\Traits\HasUUID;
use Miladimos\Toolkit\Traits\RouteKeyNameUUID;

class Publication extends Model
{
    use HasAuthor,
        HasUUID,
        Sluggable,
        SoftDeletes,
        RouteKeyNameUUID;

    protected $table = 'publications';

    // protected $fillable = ['title', 'slug', 'thumbnail_path', 'description', 'uuid'];

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function path()
    {
        return "/blog/publications/$this->slug";
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
