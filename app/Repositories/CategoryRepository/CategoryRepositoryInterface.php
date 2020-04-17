<?php


namespace App\Repositories\TagRepository;


interface CategoryRepositoryInterface
{
    public function all();

    public function find($id);
}
