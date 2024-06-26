<?php

namespace App\Models;


use App\Scope\ActiveScope;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Miladimos\Toolkit\Traits\HasUUID;

class Tag extends Model
{
    use HasFactory,
        Sluggable,
        HasUUID;

    protected $table = 'tags';

    protected $fillable = ['name', 'slug', 'uuid', 'active', 'deleted_at'];

    // protected $guarded = [];


    public static function booted()
    {
        static::addGlobalScope(new ActiveScope());
    }

    public function Articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }

    public function getRouteKeyName()
    {
        return 'uuid';
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
                'source' => 'name'
            ]
        ];
    }
}
