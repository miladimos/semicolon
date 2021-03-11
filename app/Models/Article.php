<?php

namespace App\Models;

use App\Traits\HasUUID;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string|null $code
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $bode
 * @property string $category_id
 * @property array $tags
 * @property string $images
 * @property int $viewCount
 * @property int $isDraft
 * @property int $isDisable
 * @property int $isVip
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Article confirmed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Query\Builder|Article onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsDraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsVip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereViewCount($value)
 * @method static \Illuminate\Database\Query\Builder|Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Article withoutTrashed()
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory,
        Sluggable,
        SoftDeletes,
        HasUUID;

    protected $fillable = ['title', 'slug', 'description', 'body', 'viewCount', 'category_id', 'image_url'];

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', 1);
    }


    //    public function path()
    //    {
    //        return "/@$this->user->username/$this->slug";
    //    }
    //
    //    public function category()
    //    {
    //        return $this->belongsTo(Category::class);
    //    }
    //
    //    public function tags()
    //    {
    //        return $this->belongsToMany(Tag::class);
    //    }

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
