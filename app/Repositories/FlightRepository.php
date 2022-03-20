<?php

namespace App\Repositories;

use App\Models\Flight;
use Illuminate\Support\Facades\DB;

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
        $flight->quantity_seat_type_1 = $request->quantity_seat_type_1;
        $flight->quantity_seat_type_2 = $request->quantity_seat_type_2;
        $flight->save();
    }
    public function search($request)
    {
       $flights = DB::table('flights')->where('from', '%'.$request['from'].'%')->and()->where('to','%'.$request['to'].'%' )->get();
       return $flights;
    }
}
