<?php


namespace App\Repositories\TagRepository;

use App\Repositories\BaseRepository;

class EloquentTagRepository extends BaseRepository implements TagRepositoryInterface
{

    public function all(): object
    {
        $this->model->all();
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

    public function find($id): object
    {
        // TODO: Implement find() method.
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }

    public function create($request): object
    {
        // TODO: Implement create() method.
    }

    public function destroy($id): object
    {
        // TODO: Implement destroy() method.
    }

    public function update($request, $id): void
    {
        // TODO: Implement update() method.
    }
}
