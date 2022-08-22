@extends('layouts.app')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                        <div class="content">
                            <div class="tgc-details">
                                    <div class="title">Мои транзакции</div>
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
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <th scope="row">{{ $transaction['id'] }}</th>
                                            <th scope="row">{{ $transaction['sending_from_country'] }} {{ $transaction['sending_from_currency'] }}</th>
                                            <th scope="row">{{ $transaction['receiver_get_country'] }} {{ $transaction['receiver_get_currency'] }}</th>
                                            <th scope="row">{{ $transaction['first_name'] }}</th>
                                            <th scope="row">{{ $transaction['last_name'] }}</th>
                                            <th scope="row">{{ $transaction['type_pay'] }}</th>
                                            <th scope="row">{{ $transaction['number_card'] }}</th>
                                            <th scope="row">{{ $transaction['bank_name'] }}</th>
                                            <th scope="row">{{ $transaction['account_number'] }}</th>
                                            <th scope="row">{{ $transaction['type_transaction'] }}</th>
                                            <th scope="row">{{ $transaction['from_sum'] }}</th>
                                            <th scope="row">{{ $transaction['to_sum'] }}</th>
                                            <th scope="row">{{ $transaction['exchange_rate'] }}</th>
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
