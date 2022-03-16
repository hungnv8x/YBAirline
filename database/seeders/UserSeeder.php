<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make(123123);
        $user->phone = '0973205802';
        $user->role_id = '1';
        $user->save();

        $user = new  User();
        $user->name = 'Hung';
        $user->email = 'hung@gmail.com';
        $user->password = Hash::make(123123);
        $user->phone = '0973205567';
        $user->save();

        $user = new  User();
        $user->name = 'Nhung';
        $user->email = 'nhung@gmail.com';
        $user->password = Hash::make(123123);
        $user->phone = '0978204567';
        $user->save();
    }
}
