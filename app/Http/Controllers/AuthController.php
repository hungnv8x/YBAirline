<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        if ($this->userService->login($request)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function showRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
