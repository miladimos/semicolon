<?php

namespace App\Http\Resources\Publication;

use App\Http\Resources\User\AuthorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicationResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'logo' => $this->logo,
            'banner' => $this->banner,
            'brand_color' => $this->brand_color,
            'site' => $this->site,
            'twitter' => $this->twitter,
            'telegram' => $this->telegram,
            'instagram' => $this->instagram,
            'is_official' => $this->is_official,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'author' => new AuthorResource($this->author),
        ];
    }
}
