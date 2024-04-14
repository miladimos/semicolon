<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserMetasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'avatar_path' => $this->avatar_path,
            'banner_path' => $this->banner_path,
            'fname' => $this->fname,
            'lname' => $this->lname,
            'bio' => $this->bio,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'site' => $this->site,
            'github' => $this->github,
            'facebook' => $this->facebook,
            'telegram' => $this->telegram,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'resume_link' => $this->resume_link,
            'resume_file_path' => $this->resume_file_path,
        ];
    }
}
