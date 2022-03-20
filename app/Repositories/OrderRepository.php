<?php

namespace App\Repositories;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function getOrderByFlight()
    {
        return DB::table('flights')->join('orders','flights.id','=','orders.flight_id')
            ->select('flights.id','flights.name','flights.from','flights.to','flights.quantity_seat','flights.departure_date',DB::raw('SUM(orders.quantity) as quantity'),DB::raw('SUM(orders.quantity * orders.price) as revenue'))
            ->where('flights.departure_date','<',Carbon::now()->toDateTimeString())
            ->groupBy('flights.id')->get();
    }

    public function getOrderByFlightByid($id)
    {
        return DB::table('flights')->join('orders','flights.id','=','orders.flight_id')
            ->select( 'flights.id','flights.name','flights.from','flights.to','flights.quantity_seat','flights.departure_date',DB::raw('SUM(orders.quantity) as quantity'),DB::raw('SUM(orders.quantity * orders.price) as revenue'))
            ->where('flights.departure_date','<',Carbon::now()->toDateTimeString())
            ->where('flights.id',$id)
            ->groupBy('flights.id')->first();
    }
}
