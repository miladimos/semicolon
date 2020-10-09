<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserProfile
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $age
 * @property string|null $bio
 * @property string|null $phone
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $site
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $github
 * @property string|null $gitlab
 * @property string|null $virgol
 * @property string|null $atbox
 * @property string|null $medium
 * @property string|null $avatar
 * @property string $gender
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAtbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereGitlab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereVirgol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereYoutube($value)
 * @mixin \Eloquent
 */
class UserProfile extends Model
{
    use HasFactory;

///    protected $fillable = [
////        'telegram', 'twitter', 'instagram', 'github', 'gitlab', 'virgol', 'atbox',
////        'phone', 'facebook', 'linkedin', 'avatar'
////    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
