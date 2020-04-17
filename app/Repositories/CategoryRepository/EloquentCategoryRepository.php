<?php


namespace App\Repositories\TagRepository;


use App\Models\Category;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    private $model;
    public function __construct(Category $category)
    {
        $this->model = $category;
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
