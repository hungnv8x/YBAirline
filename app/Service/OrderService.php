<?php

namespace App\Service;

use App\Repositories\OrderRepository;

class OrderService
{
    public $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function create($request)
    {
        $this->orderRepository->create($request);
    }

    public function getOrderByUser()
    {
        return $this->orderRepository->getOrderByUser();
    }

}
