<?php

namespace App\Http\Controllers;

use App\Service\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function getOrderByFlight()
    {
        $orders = $this->orderService->getOrderByFlight();
        return view('backend.sales.sales', compact('orders'));
    }

    public function getOrderByFlightDetail($id)
    {
        $order = $this->orderService->getOrderByFlightById($id);
        return view('backend.sales.detail', compact('order'));
    }
}
