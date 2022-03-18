<?php

namespace App\Http\Controllers;

use App\Service\SeatService;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public $seatService;
    public function __construct(SeatService $seatService)
    {
        $this->seatService = $seatService;
    }

    public function getAll()
    {
        $seats = $this->seatService->getAll();

        return view('backend.seat.index', compact('seats'));
    }

    public function showFormCreate()
    {
        return view('backend.seat.create');
    }

    public function create(Request $request)
    {
        $this->seatService->create($request);
        return redirect()->route('seat.index');
    }

    public function edit($id)
    {
       $seat = $this->seatService->getById($id);
       return view('backend.seat.update', compact('seat'));
    }

    public function update(Request $request, $id)
    {
        $this->seatService->update($request, $id);
        return redirect()->route('seat.index');
    }
}
