<?php

namespace App\Service;

use App\Repositories\FlightRepository;

class FlightService
{
    public $flightRepository;

    public function __construct(FlightRepository $flightRepository)
    {
        $this->flightRepository = $flightRepository;
    }

    public function getAll()
    {
        return $this->flightRepository->getAll();
    }

    public function create($request)
    {
        $this->flightRepository->create($request);
    }

    public function deleteById($id)
    {
        $this->flightRepository->deleteById($id);
    }
}
