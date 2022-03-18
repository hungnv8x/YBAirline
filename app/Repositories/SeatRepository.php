<?php

namespace App\Repositories;

use App\Models\Seat;

class SeatRepository extends BaseRepository
{

    public function getModel()
    {
        return Seat::class;
    }

}
