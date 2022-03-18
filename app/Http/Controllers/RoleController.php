<?php

namespace App\Http\Controllers;

use App\Service\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function getAll()
    {
        $roles = $this->roleService->getAll();
        return view('backend.role.index', compact('roles'));
    }

    public function deleteById($id)
    {
        $this->roleService->deleteById($id);
        return redirect()->route('role.index');
    }

    public function showFormCreate()
    {
        return view('backend.role.create');
    }

    public function create(Request $request)
    {
        $this->roleService->create($request);
        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        $role = $this->roleService->getByID($id);
        return view('backend.role.update', compact('role'));
    }

    public function update(Request $request,$id)
    {
        $this->roleService->update($request, $id);
        return redirect()->route('role.index');
    }
}
