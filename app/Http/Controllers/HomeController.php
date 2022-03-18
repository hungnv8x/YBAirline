<?php

namespace App\Http\Controllers;

use App\Service\FlightService;

class HomeController extends Controller
{
    public $flightService;
    public function __construct(FlightService $flightService)
    {
        $this->flightService = $flightService;
    }

    public function getAll()
    {
      $flights =  $this->flightService->getAll();
      return view('frontend.flightList',compact('flights'));
    }

}
