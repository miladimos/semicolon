<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Post;
use App\Models\Publication;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\Post\PostCollection;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\Publication\PublicationResource;
use App\Http\Resources\Publication\PublicationCollection;
use Illuminate\Support\Facades\Auth;

class BlogApiController extends ApiBaseController
{
    public function posts()
    {
        $posts = Cache::remember('posts', now()->addMinutes(60), function () {
            return Post::latest()->get();
        });

        return new PostCollection($posts);
    }

    public function single(Post $post)
    {
        $post->increment('view_count');

        return new PostResource($post);
    }

    public function publications()
    {
        $publications = Cache::remember('publications', now()->addMinutes(60), function () {
            return Publication::latest()->get();
        });

        return new PublicationCollection($publications);
    }

    public function publicationSingle(Publication $publication)
    {
        return new PublicationResource($publication);
    }

    public function like(Post $post)
    {
        $post->likeBy(Auth::user());
        return rJson('liked');
    }

    public function likes(Post $post)
    {
        return rJson($post->likes);
    }
}
