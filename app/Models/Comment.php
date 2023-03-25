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

    // protected $fillable = ['title', 'slug', 'description', 'body', 'view_count', 'category_id', 'image_url'];

    protected $guarded = [];

    protected $casts = [
        'approved' => 'boolean'
    ];

    protected $dates = [
        'approved_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->where('approved', 1)->latest();
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }

    public function scopeUnApproved($query)
    {
        return $query->where('approved', 0);
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = str_replace(PHP_EOL, "<br>", $value);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
