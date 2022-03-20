<?php

namespace App\Service;

class OrderService
{
    public $oderRepository;

    public function getQuantitySeatByFlightId($id)
    {
        return $this->model::findOrFail($id)->quantity;
    }
}
