<?php


namespace App\Repositories\ArticleRepository;


use App\Models\Article;

class EloquentArticleRepository implements ArticleRepositoryInterface
{
    private $model;

    public function __construct(Article $article)
    {
        $this->model = $article;
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
