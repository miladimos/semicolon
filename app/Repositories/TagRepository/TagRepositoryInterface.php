<?php


namespace App\Repositories\TagRepository;


interface TagRepositoryInterface
{
    public function all();

    public function find($id);
}
