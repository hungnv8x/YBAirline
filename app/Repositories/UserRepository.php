<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = User::class;
    }
}
