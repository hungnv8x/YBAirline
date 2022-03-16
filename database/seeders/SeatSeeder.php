<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\Seat_type;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seat = new Seat();
        $seat->name = 'Thương gia';
        $seat->price = 1000000;
        $seat->save();

        $seat = new Seat();
        $seat->name = 'Phổ thông';
        $seat->price = 900000;
        $seat->save();

    }
}
