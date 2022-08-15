<?php

namespace App\Http\Controllers;

use App\Models\Requisite;
use App\Models\User;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function index()
    {
        $users = User::all()->toArray();
        return view('admin/admin', ['users' => $users]);
    }

    public function user(int $userId)
    {
        $user = User::find($userId)->toArray();
        if (isset($user['date_birth'])) {
            $user['day_birth'] = date('d', strtotime($user['date_birth']));
            $user['month_birth'] = date('m', strtotime($user['date_birth']));
            $user['year_birth'] = date('Y', strtotime($user['date_birth']));
        } else {
            $user['day_birth'] = null;
            $user['month_birth'] = null;
            $user['year_birth'] = null;
        }
        return view('admin/userSettings', ['user' => $user]);
    }

    public function userUpdate(int $userId, Request $request)
    {
        $user = User::find($userId);
        if (isset($request->originalFirstName)) {
            $user->name = $request->originalFirstName;
        }
        if (isset($request->minPayment)) {
            $user->min_payment = $request->minPayment;
        }
        if (isset($request->originalLastName)) {
            $user->last_name = $request->originalLastName;
        }
        if (isset($request->day) && isset($request->month) && isset($request->year)) {
            $day = $request->day;
            $month = $request->month;
            $year = $request->year;
            $user->date_birth = "{$year}-{$month}-{$day}";
        }

        if (isset($request->phone_number)) {
            $user->phone_number = $request->phone_number;
        }

        if (isset($request->country)) {
            $user->country = $request->country;
        }

        if (isset($request->address)) {
            $user->address = $request->address;
        }

        if (isset($request->city)) {
            $user->city = $request->city;
        }

        if (isset($request->postcode)) {
            $user->postcode = $request->postcode;
        }

        $user->save();

        return view('admin/userSettings', ['user' => $user]);
    }

    public function userOrders(int $userId)
    {
        $orders = UserOrder::where(['user_id' => $userId, 'confirmed' => 1])->get()->toArray();

        return view('admin/userOrders', ['orders' => $orders]);
    }

    public function requisites()
    {
        $requisite = Requisite::first();

        return view('admin/requisites', ['requisites' => $requisite]);
    }

    public function requisitesSave(Request $request)
    {
       $requisite = Requisite::first();

        if (isset($request->number_card)) {
            $requisite->number_card = $request->number_card;
        }

       return view('admin/requisites', ['requisites' => $requisite]);
    }
}
