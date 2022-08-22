@extends('layouts.admin')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                                <div class="title">Users</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Откуда</th>
                                            <th scope="col">Куда</th>
                                            <th scope="col">Имя</th>
                                            <th scope="col">Фамилия</th>
                                            <th scope="col">Тип</th>
                                            <th scope="col">Номер карты</th>
                                            <th scope="col">Название банка</th>
                                            <th scope="col">Номер счета</th>
                                            <th scope="col">Тип перевода</th>
                                            <th scope="col">Сумма из</th>
                                            <th scope="col">Сумма в</th>
                                            <th scope="col">Курс</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col"></th>
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
                                            <th scope="row">
                                                <form method="post" action="/admin/orderedit/{{$order['id']}}">
                                                    @csrf
                                                    <select name="statuses" id="status-select">
                                                        @foreach($statuses as $status)
                                                            <option {{ $order['status_id'] ==  $status['id'] ? 'selected' : ''  }} value="{{$status['id']}}">{{$status['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="submit" value="Применить">
                                                </form>
                                            </th>
                                            <th scope="row">
                                                <form method="post" action="/admin/orderdelete/{{$order['id']}}">
                                                    @csrf
                                                    <input type="submit" value="X">
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
