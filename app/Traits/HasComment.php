<?php

namespace App\Traits;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasComment
{

    public function comments()
    {
        return $this->commentsRelation();
    }

    public function commentsRelation(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable', 'commentables')->withTimestamps();
    }

    // /**
    //  * @param \App\Models\Comment[]|int[] $comments
    //  */
    // public function syncComments(array $comments)
    // {
    //     $this->save();
    //     $this->commentsRelation()->sync($comments);
    // }

    // public function removeComments()
    // {
    //     $this->commentsRelation()->detach();
    // }
}
