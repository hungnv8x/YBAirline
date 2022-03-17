<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = User::class;
    }

    public function create($request)
    {
        $user = $request->only('name','email','phone','password');
        $user['password'] = Hash::make('password');
        $this->model::create($user);
    }

    public function getByEmail($email)
    {
        return $this->model::where('email',$email)->first();
    }
}
