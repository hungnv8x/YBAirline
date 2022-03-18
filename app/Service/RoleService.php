<?php

namespace App\Service;

use App\Repositories\RoleRepository;

class RoleService
{
    public $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function getAll()
    {
         return $this->roleRepository->getAll();
    }
    public function deleteById($id)
    {
        $this->roleRepository->deleteById($id);
    }

    public function create($request)
    {
         $this->roleRepository->create($request);
    }

    public function getByID($id)
    {
        return $this->roleRepository->getById($id);
    }

    public function update($request, $id)
    {
        $this->roleRepository->update($request, $id);
    }
}
