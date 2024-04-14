<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'avatar_path' => $this->profile->avatar_path,
            'banner_path' => $this->profile->banner_path,
            'fname' => $this->profile->fname,
            'lname' => $this->profile->lname,
            'bio' => $this->profile->bio,
            'gender' => $this->profile->gender,
            'birthday' => $this->profile->birthday,
            'site' => $this->profile->site,
            'github' => $this->profile->github,
            'facebook' => $this->profile->facebook,
            'telegram' => $this->profile->telegram,
            'instagram' => $this->profile->instagram,
            'linkedin' => $this->profile->linkedin,
            'twitter' => $this->profile->twitter,
            'resume_link' => $this->profile->resume_link,
            'resume_file_path' => $this->profile->resume_file_path,
        ];
    }
}
