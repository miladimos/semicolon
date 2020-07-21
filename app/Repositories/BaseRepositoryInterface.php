<?php


namespace App\Repositories;


interface BaseRepositoryInterface
{
    public function all(): object;

    public function paginate($perPage = 15, $columns = array('*'));

    public function find($id): object;

    public function findBy($field, $value, $columns = array('*'));

    public function create($request): object;

    public function destroy($id): object ;

    public function update($request, $id): void;
}
