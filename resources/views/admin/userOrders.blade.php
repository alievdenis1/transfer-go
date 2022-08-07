@extends('layouts.admin')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                        <div class="content">
                            <div class="tgc-details">
                                <div class="title">Users</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Sending from</th>
                                            <th scope="col">Receiver get</th>
                                            <th scope="col">First name</th>
                                            <th scope="col">Last name</th>
                                            <th scope="col">Type pay</th>
                                            <th scope="col">Number card</th>
                                            <th scope="col">Bank name</th>
                                            <th scope="col">Account number</th>
                                            <th scope="col">Type transaction</th>
                                            <th scope="col">From sum</th>
                                            <th scope="col">To sum</th>
                                            <th scope="col">Exchange rate</th>
                                        </tr>
                                    </thead>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $order['id'] }}</th>
                                            <th scope="row">{{ $order['sending_from_country'] }} {{ $order['sending_from_currency'] }}</th>
                                            <th scope="row">{{ $order['receiver_get_country'] }} {{ $order['receiver_get_currency'] }}</th>
                                            <th scope="row">{{ $order['first_name'] }}</th>
                                            <th scope="row">{{ $order['last_name'] }}</th>
                                            <th scope="row">{{ $order['type_pay'] }}</th>
                                            <th scope="row">{{ $order['number_card'] }}</th>
                                            <th scope="row">{{ $order['bank_name'] }}</th>
                                            <th scope="row">{{ $order['account_number'] }}</th>
                                            <th scope="row">{{ $order['type_transaction'] }}</th>
                                            <th scope="row">{{ $order['from_sum'] }}</th>
                                            <th scope="row">{{ $order['to_sum'] }}</th>
                                            <th scope="row">{{ $order['exchange_rate'] }}</th>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
