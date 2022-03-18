<?php

namespace App\Repositories;

use App\Models\Seat;

class SeatRepository extends BaseRepository
{

    public function getModel()
    {
        return Seat::class;
    }

    public function create($request)
    {
        $seat = $request->only('name', 'price');
        $this->model::create($seat);
    }

    public function update($request, $id)
    {
        $seat = $this->getById($id);
        $seat->name = $request->name;
        $seat->price = $request->price;
        $seat->save();
    }
}
