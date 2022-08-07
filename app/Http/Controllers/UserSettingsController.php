<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
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
        $user = auth()->user()->toArray();
        if (isset($user['date_birth'])) {
            $user['day_birth'] = date('d', strtotime($user['date_birth']));
            $user['month_birth'] = date('m', strtotime($user['date_birth']));
            $user['year_birth'] = date('Y', strtotime($user['date_birth']));
        } else {
            $user['day_birth'] = null;
            $user['month_birth'] = null;
            $user['year_birth'] = null;
        }
        return view('settings', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        if (isset($request->originalFirstName)) {
          $user->name = $request->originalFirstName;
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

        return redirect('/settings');
    }
}
