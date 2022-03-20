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

    public function getPaginate()
    {
        return $this->flightRepository->getPaginate();
    }

    public function getAll()
    {
        return $this->flightRepository->getAll();
    }

    public function getAllNow()
    {
        return $this->flightRepository->getAllNow();
    }

    public function create($request)
    {
        $this->flightRepository->create($request);
    }

    public function update($request)
    {
        $this->flightRepository->update($request);
    }

    public function getById($id)
    {
      return  $this->flightRepository->getById($id);
    }

    public function deleteById($id)
    {
        $this->flightRepository->deleteById($id);
    }


}
