<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\Tag\TagResource;
use App\Http\Resources\Tag\TagCollection;
use App\Http\Controllers\Api\ApiBaseController;

class TagApiController extends ApiBaseController
{
    public function index()
    {
        $tags = Cache::remember('tags', now()->addMinutes(15), function () {
            return Tag::latest()->paginate(48);
        });

        return new TagCollection($tags);
    }

    public function single(Tag $tag)
    {
        return new TagResource($tag);
    }
}
