<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = Order::class;
    }

    public function create($request)
    {
        $order = [
            "flight_id" => session()->get('order')->id,
            "user_id" => Auth::user()->id,
            "quantity" => $request->quantity,
            "price" => session()->get('order')->seat->price
        ];
        $this->model::create($order);
        session()->remove('order');
    }

    public function getOrderByUser()
    {
        $id = Auth::user()->id;
        return $this->model::where('user_id',$id)->get();
    }
}
