<?php

namespace App\Service;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\True_;

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

    public function create($request)
    {
        $this->userRepository->create($request);
    }

    public function login($request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            $user = $this->userRepository->getByEmail($data['email']);
            session()->put('user',$user);
            return True;
        }else{
            return false;
        }
    }
}
