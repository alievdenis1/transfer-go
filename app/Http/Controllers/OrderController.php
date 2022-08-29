<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use App\Services\Order\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(int $id)
    {
        $order = UserOrder::where('id', $id)->first()->toArray();

        if ($order["step"] == 2) {
            return view('step2', ['order_id' => $id]);
        }

        if ($order["step"] == 3) {
            return view('step3', ['order_id' => $id]);
        }

        if ($order["step"] == 4) {
            return view('step4', ['order_id' => $id]);
        }
    }

    public function myList()
    {
        $userId = Auth::id();
        $transactions = UserOrder::where('user_id', $userId)->with('status')->get()->toArray();
        return view('transactions', ['transactions' => $transactions]);
    }
}
