<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends BaseRepository
{

    public function getModel()
    {
        return Role::class;
    }

    public function create($request)
    {
        $role = $request->only('name');
        $this->model::create($role);
    }

    public function update($request, $id)
    {
       $role = $this->getById($id);
       $role->name = $request->name;
       $role->save();
    }


}
