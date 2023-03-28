<?php

namespace App\Models;

use App\Traits\HasComment;
use Miladimos\Toolkit\Traits\HasTags;
use Miladimos\Toolkit\Traits\HasUUID;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Miladimos\Toolkit\Traits\HasAuthor;
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
    //     'title', 'slug', 'description', 'body', 'view_count',
    //     'category_id', 'image_url', 'uuid', 'active', 'deleted_at'
    // ];

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function path()
    {
        return "/@{$this->author->username}/{$this->slug}";
    }

    public function url()
    {
        return url($this->path());
    }

    public function getThumbnailAttribute()
    {
        return isset($this->thumbnail_path) ? asset("/public/avatars/default.jpg") : asset($this->thumbnail_path);
    }

    //     {
    //         return $query->where(function ($query) use ($search) {

    //             $query->where('title', 'LIKE', "%$search%")
    //                     ->where('lang', getLang())
    //                     ->orWhere('content', 'LIKE', "%$search%");
    //         });
    //     }

    // public function excerpt(int $limit = 100): string
    // {
    //     return Str::limit(strip_tags(md_to_html($this->body())), $limit);
    // }

    public function hasTag($tagId)
    {
        //        return collect(in_array($tagId, $this->tags->pluck('id')))->toArray();
        return collect(in_array($tagId, $this->tags))->pluck('id')->toArray();
    }

    public function scopeSearch($query, $keywords)
    {

        $keywords = explode(' ', $keywords);
        foreach ($keywords as $keyword) {
            $query->whereHas('categories', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
                ->orWhere('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('tags', 'LIKE', '%' . $keyword . '%');
        }
        return $query;
    }


    public function scopeFilter($query)
    {
        $category = request('category');
        if (isset($category) && trim($category) != '' && $category != 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->whereId($category);
            });
        }
        //
        //        $type = request('type');
        //        if(isset($type) && trim($type) != '') {
        //            if(in_array($type , ['vip' , 'cash' , 'free'])) {
        //                $query->whereType($type);
        //            }
        //        }


        if (request('order') == '1') {
            $query->oldest();
        } else {
            $query->latest();
        }

        return $query;
    }



    public function readTime()
    {
        $minutes = round(str_word_count($this->body()) / 200);

        return $minutes == 0 ? 1 : $minutes;
    }


    public function scopePopular(Builder $query): Builder
    {
        return $query->withCount('likes')
            ->orderBy('view_count', 'desc')
            ->orderBy('submitted_at', 'desc');
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
