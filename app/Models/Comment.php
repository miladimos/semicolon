<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory,
        HasUUID;

    protected $table = 'comments';

    // protected $fillable = ['title', 'slug', 'description', 'body', 'viewCount', 'category_id', 'image_url'];

    protected $guarded = [];

    protected $casts = [
        'approved' => 'boolean'
    ];

    protected $dates = [
        'approved_at'
    ];


    public function commentable()
    {
        return $this->morphTo();
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }
}
