<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Course\CourseCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'coach_percent' => $this->coach_percent,
            'market_percent' => $this->market_percent,
            // 'posts_count' => $this->whenCounted('posts'),
            // 'courses' => new CourseCollection($this->courses),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'profile' => new ProfileResource($this),
        ];
    }
}
