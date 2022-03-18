<?php

namespace App\Service;

use App\Repositories\SeatRepository;

class SeatService
{
    public $seatRepository;
    public function __construct(SeatRepository $seatRepository)
    {
        $this->seatRepository = $seatRepository;
    }

    public function getAll()
    {
      return $this->seatRepository->getAll();
    }

    public function create($request)
    {
        $this->seatRepository->create($request);
    }

}
