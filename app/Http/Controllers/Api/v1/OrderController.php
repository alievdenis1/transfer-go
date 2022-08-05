<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Order\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        private Order $order
    )
    {}

    public function store(Request $request)
    {
        $this->order->createOrder($request->post());
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
}
