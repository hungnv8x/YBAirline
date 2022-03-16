<?php

namespace App\Repositories;

use App\Repositories\Impl\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    public $model;
    public function __construct()
    {
        $this->model= $this->getModel();
    }

    abstract public function getModel();

    public function getAll()
    {
        return $this->model::all();
    }

    public function getById($id)
    {
        return $this->model::finOrFail($id);
    }

    public function deleteById($id)
    {
        $this->model::destroy($id);
    }
}
