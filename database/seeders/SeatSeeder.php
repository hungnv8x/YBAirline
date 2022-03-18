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
        $seat->name = 'HN-HCM';
        $seat->price = 1000000;
        $seat->flight_id = 1;
        $seat->save();

        $seat = new Seat();
        $seat->name = 'HN-DN';
        $seat->price = 900000;
        $seat->flight_id = 2;
        $seat->save();

        $seat = new Seat();
        $seat->name = 'HCM-DN';
        $seat->price = 800000;
        $seat->flight_id = 3;
        $seat->save();

    }
}
