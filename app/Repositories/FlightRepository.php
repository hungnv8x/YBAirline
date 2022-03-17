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
}
