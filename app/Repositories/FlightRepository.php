<?php

namespace App\Repositories;

use App\Models\Flight;

class FlightRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = Flight::class;
    }

    public function create($request)
    {
        $flight = $request->except('_token');
        $this->model::create($flight);
    }

        public function update($request)
    {
        $flight = $this->getById($request->id);
        $flight->name = $request->name;
        $flight->departure_date = $request->departure_date;
        $flight->travel_time = $request->travel_time;
        $flight->from = $request->from;
        $flight->to = $request->to;
        $flight->quantity_seat= $request->quantity_seat;
        $flight->seat_id = $request->seat_id;
        $flight->save();
    }
}
