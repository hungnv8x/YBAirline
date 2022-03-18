<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->flight_id = 1;
        $order->user_id = 1;
        $order->quantity = 1;
        $order->price = 1000000;
        $order->save();

        $order = new Order();
        $order->flight_id = 2;
        $order->user_id = 2;
        $order->quantity = 2;
        $order->price = 900000;
        $order->save();

        $order = new Order();
        $order->flight_id = 2;
        $order->user_id = 3;
        $order->quantity = 2;
        $order->price = 900000;
        $order->save();

    }
}
