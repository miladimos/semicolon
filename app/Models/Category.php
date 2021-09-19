<?php

namespace App\Models;

use App\Traits\HasUUID;
use App\Scope\ActiveScope;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,
        Sluggable,
        HasUUID;

    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'description', 'parent_id', 'thumbnail', 'active', 'uuid'];

    // protected $guarded = [];

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id')->withDefault(['name' => '---']);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function articles()
    {
        return $this->morphedByMany(Article::class, 'categoriable', 'categoriables');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    /**
     * Get all of the articles that are assigned this tag.
     */
    public function podcasts()
    {
        return $this->morphedByMany(Podcast::class, 'categoriable', 'categoriables');
    }

    //    public function articles()
    //    {
    //        return $this->hasMany(Article::class);
    //    }

    public function path()
    {
        return "/category/" . $this->slug;
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
                'source' => 'name'
            ]
        ];
    }
}
