<?php

namespace App\Http\Controllers;

use App\Service\FlightService;
use App\Service\SeatService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $flightService;
    public function __construct(FlightService $flightService)
    {
        $this->flightService = $flightService;
    }

    public function getAll()
    {
      $flights =  $this->flightService->getAllNow();
      return view('frontend.flightList',compact('flights'));
    }

    public function detail($id)
    {
        $flight =  $this->flightService->getById($id);
        return view('frontend.detail',compact('flight'));
    }

    public function order( Request $request)
    {

    }

}
