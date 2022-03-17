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
}
