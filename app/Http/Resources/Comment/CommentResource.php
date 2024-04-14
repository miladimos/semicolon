<?php

namespace App\Http\Resources\Comment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'parent_id' => $this->parent_id,
            'commentorable' => $this->commentorable,
            'commentable' => $this->commentable,
            'comment' => $this->comment,
            'approved' => $this->approved,
            'approved_at' => $this->approved_at,
            'up_vote_count' => $this->up_vote_count,
            'down_vote_count' => $this->down_vote_count,
            // 'learnings' => CourseCollection($this->learningg),
            // 'posts_count' => $this->whenCounted('posts'),

            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
