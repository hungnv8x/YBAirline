<?php

namespace App\Http\Controllers;

use App\Service\FlightService;
use App\Service\SeatService;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public $flightService;
    public $seatService;
    public function __construct(FlightService $flightService, SeatService $seatService)
    {
        $this->flightService = $flightService;
        $this->seatService = $seatService;
    }

    public function getPaginate()
    {
        $flights = $this->flightService->getPaginate();
        return view('backend.flight.list', compact('flights'));
    }

    public function deleteById($id)
    {
        $this->flightService->deleteById($id);
        return redirect()->back();
    }

    public function showCreate()
    {
        $seats = $this->seatService->getAll();
        return view('backend.flight.create',compact('seats'));
    }

    public function create(Request $request)
    {
        $this->flightService->create($request);
        return redirect()->route('flights.list');
    }

    public function edit($id)
    {
        $flight = $this->flightService->getById($id);
        $seats = $this->seatService->getAll();
        return view('backend.flight.update', compact('flight','seats'));
    }
    public function update(Request $request)
    {
        $this->flightService->update($request);
        return redirect()->route('flights.list');
    }

    public function showHome()
    {
        $flights = $this->flightService->getAll();
        return view('frontend.home', compact('flights'));
    }

}
