<?php


namespace App\Repositories\TagRepository;


use App\Models\Tag;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    private $model;
    public function __construct(Tag $tag)
    {
        $this->model = $tag;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
