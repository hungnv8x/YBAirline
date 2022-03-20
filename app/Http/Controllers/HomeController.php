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

    public function getAll()
    {
        $flights = $this->flightService->getAllNow();
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
        return redirect()->route('home');
    }

}
