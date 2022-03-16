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
        $order->save();

        $order = new Order();
        $order->flight_id = 2;
        $order->user_id = 2;
        $order->save();

    }
}
