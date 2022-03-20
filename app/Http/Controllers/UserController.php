<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Service\RoleService;
use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userService;
    public $roleService;
    public function __construct(UserService $userService , RoleService $roleService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function getPaginate()
    {
        $users = $this->userService->getPaginate();
        return view('backend.user.list',compact('users'));
    }

    public function deleteById($id)
    {
        $this->userService->deleteById($id);
        return redirect()->route('users.list');
    }

    public function edit($id)
    {
        $user = $this->userService->getById($id);
        $roles = $this->roleService->getAll();
        return view('backend.user.update',compact('user','roles'));
    }

    public function update(Request $request)
    {
        $this->userService->update($request);
        return redirect()->route('users.list');
    }

    public function showCreate()
    {
        $roles = $this->roleService->getAll();
        return view('backend.user.create',compact('roles'));
    }

    public function create(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('users.list');
    }
}
