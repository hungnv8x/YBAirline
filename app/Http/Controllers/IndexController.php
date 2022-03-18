<?php

namespace App\Http\Controllers;

use App\Service\RoleService;
use App\Service\UserService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $roleService;
    public $userService;
    public function __construct(RoleService $roleService, UserService $userService)
    {
        $this->roleService = $roleService;
        $this->userService = $userService;
    }

    public function getAll()
    {
       $roles =  $this->roleService->getAll();
       $users = $this->userService->getAll();
       return view('backend.index',compact('roles','users'));
    }
}
