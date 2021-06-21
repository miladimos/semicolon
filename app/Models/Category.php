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

    protected $fillable = ['name', 'slug', 'image', 'parent_id'];

    protected $guarded = [];

    public static function booted()
    {
        static::addGlobalScope(new ActiveScope());
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
