<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'permissions'];

    protected $casts = [
        'permissions' => 'array'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
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
