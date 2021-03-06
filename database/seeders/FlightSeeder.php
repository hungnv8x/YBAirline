<?php

namespace Database\Seeders;

use App\Models\Flight;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight = new Flight();
        $flight->name = 'YB336';
        $flight->departure_date = '2022-03-16 10:0:0';
        $flight->travel_time = '2:0:0';
        $flight->from = 'Hà Nội';
        $flight->to = 'Hồ Chí Minh';
        $flight->quantity_seat_type_1 = 5;
        $flight->quantity_seat_type_2 = 45;
        $flight->save();

        $flight = new Flight();
        $flight->name = 'YB337';
        $flight->departure_date = '2022-03-16 12:30:0';
        $flight->travel_time = '1:30:0';
        $flight->from = 'Hà Nội';
        $flight->to = 'Đà Nẵng';
        $flight->quantity_seat_type_1 = 5;
        $flight->quantity_seat_type_2 = 45;
        $flight->save();

        $flight = new Flight();
        $flight->name = 'YB338';
        $flight->departure_date = '2022-03-16 16:30';
        $flight->travel_time = '2:30:0';
        $flight->from = 'Hồ Chí Minh';
        $flight->to = 'Đà Nẵng';
        $flight->quantity_seat_type_1 = 5;
        $flight->quantity_seat_type_2 = 45;
        $flight->save();
    }
}
