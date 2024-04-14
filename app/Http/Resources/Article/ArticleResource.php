<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'author_id' => $this->author_id,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'body' => $this->body,
            'thumbnail_path' => $this->thumbnail_path,
            'type' => $this->type,
            'view_count' => $this->view_count,
            // 'learnings' => CourseCollection($this->learningg),
            // 'posts_count' => $this->whenCounted('posts'),

            'pinned' => $this->pinned,
            'published_at' => $this->published_at,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
