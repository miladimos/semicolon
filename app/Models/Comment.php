<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Miladimos\Toolkit\Traits\HasUUID;

class Comment extends Model
{
    use HasFactory,
        HasUUID,
        SoftDeletes;

    protected $table = 'comments';

    // protected $fillable = ['title', 'slug', 'description', 'body', 'view_count', 'category_id', 'image_url'];

    protected $guarded = [];

    protected $casts = [
        'approved' => 'boolean'
    ];

    protected $dates = [
        'approved_at'
    ];


    public function commentorable()
    {
        return $this->morphTo();
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->where('approved', 1)->latest();
    }

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
        return $query->where('approved', 1)->get();
    }

    public function scopeUnApproved($query)
    {
        return $query->where('approved', 0)->get();
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = str_replace(PHP_EOL, '<br>', $value);
    }

    // public function for()
    // {
    //     $type = $this->commentable_type;
    //     $id = $this->commentable_id;
    //     $message = '';

    //     if ($type == Course::class) {
    //         $message = 'برای دوره : ' . Course::find($id)->title;
    //     } elseif ($type == Book::class) {
    //         $message = 'برای کتاب : ' . Book::find($id)->title;
    //     } elseif ($type == Episode::class) {
    //         $message = 'برای درس : ' . Episode::find($id)->title;
    //     } elseif ($type == User::class) {
    //         $message = 'برای مدرس : ' . User::find($id)->fullname;
    //     }

    //     return $message;
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
