<?php

namespace App\Http\Controllers;

use App\Service\FlightService;
use App\Service\OrderService;
use App\Service\SeatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $flightService;
    public $orderService;

    public function __construct(FlightService $flightService, OrderService $orderService)
    {
        $this->flightService = $flightService;
        $this->orderService = $orderService;
    }

    public function getAll(Request $request)
    {
        if (isset($request->from)&&isset($request->to)){
            $flights = $this->flightService->searchByFromTo($request->from,$request->to);
            session()->put('from',$request->from);
            session()->put('to',$request->to);
        }elseif (isset($request->from)){
            $flights = $this->flightService->searchByFrom($request->from);
            session()->remove('from');
            session()->remove('to');
            session()->put('from',$request->from);
        }elseif (isset($request->to)){
            $flights = $this->flightService->searchByTo($request->to);
            session()->remove('from');
            session()->remove('to');
            session()->put('to',$request->to);
        }else{
            $flights = $this->flightService->getAllNow();
            session()->remove('from');
            session()->remove('to');
        }
        return view('frontend.flightList', compact('flights'));
    }

    public function detail($id)
    {
        $flight = $this->flightService->getById($id);
        session()->put('order',$flight);
        return view('frontend.detail', compact('flight'));
    }

    public function order(Request $request)
    {
        $this->orderService->create($request);
        return redirect()->route('home.orderCustomer');
    }

    public function orderCustomer()
    {
        $orders = $this->orderService->getOrderByUser();
        return view('frontend.order',compact('orders'));
    }
}
