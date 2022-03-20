<?php

namespace App\Repositories;

use App\Repositories\Impl\RepositoryInterface;
use Carbon\Carbon;

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

    public function getAllNow()
    {
        return $this->model::where('departure_date','>',Carbon::now()->toDateTimeString())->get();
    }

    public function getPaginate()
    {
        return $this->model::paginate(5);
    }

    public function getById($id)
    {
        return $this->model::findOrFail($id);
    }

    public function deleteById($id)
    {
        $this->model::destroy($id);
    }

}
