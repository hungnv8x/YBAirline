<?php

namespace App\Repositories;

use App\Models\Flight;
use Carbon\Carbon;

class FlightRepository extends BaseRepository
{

    public function getModel()
    {
        return $this->model = Flight::class;
    }

    public function getAllNow()
    {
        return $this->model::where('departure_date','>',Carbon::now()->toDateTimeString())->get();
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

    public function searchByFrom($from)
    {
        return $this->model::where('from',$from)->where('departure_date','>',Carbon::now()->toDateTimeString())->get();
    }

    public function searchByTo($to)
    {
        return $this->model::where('to',$to)->where('departure_date','>',Carbon::now()->toDateTimeString())->get();
    }

    public function searchByFromTo($from, $to)
    {
        return $this->model::where('from',$from)->where('to',$to)->where('departure_date','>',Carbon::now()->toDateTimeString())->get();
    }
}
