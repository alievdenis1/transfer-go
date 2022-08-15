<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Api\CreatorResponses;
use App\Services\Order\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        private Order $order,
        private CreatorResponses $creatorResponses
    )
    {}

    public function store(Request $request)
    {
        return $this->creatorResponses->createJsonSuccess(
            ['order' => $this->order->createOrder($request->post())]
        );
    }

    public function destroy(int $id)
    {
        $this->order->deleteOrder($id);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, int $id)
    {
        return $this->creatorResponses->createJsonSuccess(
            ['order' => $this->order->updateOrder($request->post(), $id)]
        );
    }
}
