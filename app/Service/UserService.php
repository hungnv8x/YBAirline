<?php

namespace App\Service;

use App\Repositories\UserRepository;

class UserService
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
      return  $this->userRepository->getAll();
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function deleteById($id)
    {
        $this->userRepository->deleteById($id);
    }

}
