<?php

namespace App\Http\Controllers;

use App\Service\FlightService;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public $flightService;
    public function __construct(FlightService $flightService)
    {
        $this->flightService = $flightService;
    }

    public function getAll()
    {
        $flights = $this->flightService->getAll();
        return view('backend.flight.list', compact('flights'));
    }

    public function deleteById($id)
    {
        $this->flightService->deleteById($id);
        return redirect()->back();
    }

    public function showCreate()
    {
        return view('backend.flight.create');
    }

    public function create(Request $request)
    {

        $this->flightService->create($request);
        return redirect()->route('flights.list');
    }

}
