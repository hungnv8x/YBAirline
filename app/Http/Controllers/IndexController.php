<?php

namespace App\Http\Controllers;

use App\Service\FlightService;
use App\Service\RoleService;
use App\Service\UserService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $roleService;
    public $userService;
    public $flightService;
    public function __construct(RoleService $roleService, UserService $userService, FlightService $flightService)
    {
        $this->roleService = $roleService;
        $this->userService = $userService;
        $this->flightService = $flightService;
    }

    public function getAll()
    {
       $roles =  $this->roleService->getAll();
       $users = $this->userService->getAll();
       $flights = $this->flightService->getAll();
       return view('backend.index',compact('roles','users','flights'));
    }
}
