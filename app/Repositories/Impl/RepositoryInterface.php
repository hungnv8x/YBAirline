<?php

namespace App\Repositories\Impl;

interface RepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function deleteById($id);
}
