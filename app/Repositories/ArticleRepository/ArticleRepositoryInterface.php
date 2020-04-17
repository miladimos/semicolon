<?php


namespace App\Repositories\ArticleRepository;


interface ArticleRepositoryInterface
{
    public function all();

    public function find($id);
}
