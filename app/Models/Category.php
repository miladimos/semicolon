<?php

namespace App\Models;

use App\Traits\HasUUID;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    use HasFactory,
        Sluggable,
        HasUUID;

    protected $fillable = ['name', 'slug', 'image', 'parent_id'];

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
