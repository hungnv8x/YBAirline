<?php

namespace Database\Seeders;

use App\Models\Order_detail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetail = new Order_detail();
        $orderDetail->order_id = 1;
        $orderDetail->seat_id = 1;
        $orderDetail->quantity = 2;
        $orderDetail->price = 1000000;
        $orderDetail->save();

        $orderDetail = new Order_detail();
        $orderDetail->order_id = 1;
        $orderDetail->seat_id = 2;
        $orderDetail->quantity = 3;
        $orderDetail->price = 900000;
        $orderDetail->save();
    }
}
