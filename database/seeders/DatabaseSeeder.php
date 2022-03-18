<?php

namespace Database\Seeders;

use App\Models\order_detail;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SeatSeeder::class);
        $this->call(FlightSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
