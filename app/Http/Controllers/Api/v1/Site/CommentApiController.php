<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Comment;
use App\Http\Controllers\Api\ApiBaseController;

class CommentApiController extends ApiBaseController
{
    public function index()
    {
        $comments = Comment::latest()->get();

        return response()->json($comments);
    }

    public function single(Comment $comment)
    {
        return response()->json($comment);
    }
}
