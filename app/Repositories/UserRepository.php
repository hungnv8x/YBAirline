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
        $user['password'] = Hash::make($user['password']);
        $this->model::create($user);
    }
    public function update($request)
    {
        $user = $this->getById($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role;
        $user->save();
    }
}
