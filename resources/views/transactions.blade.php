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
                                        <th scope="col">Откуда</th>
                                        <th scope="col">Куда</th>
                                        <th scope="col">Статус</th>
                                        <th scope="col">Транзакция</th>
                                    </tr>
                                    </thead>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <th scope="row">{{ $transaction['uniqId'] }}</th>
                                            <th scope="row">{{ $transaction['sending_from_country'] }} {{ $transaction['sending_from_currency'] }}</th>
                                            <th scope="row">{{ $transaction['receiver_get_country'] }} {{ $transaction['receiver_get_currency'] }}</th>
                                            <th scope="row">{{ $transaction['status']['name'] }}</th>

                                            <th scope="row"><a href="/order/{{$transaction['id']}}">Перейти</a></th>
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
