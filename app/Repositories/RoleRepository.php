<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = Role::class;
    }
}
