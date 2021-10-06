<?php

namespace App\Repositories\Tag;

use Miladimos\Repository\Repositories\BaseRepository;
use App\Models\Tag;
use App\Repositories\Tag\TagEloquentRepositoryInterface;

class TagRepository extends BaseRepository implements TagEloquentRepositoryInterface
{
    public function model()
    {
        return Tag::class;
    }
}
