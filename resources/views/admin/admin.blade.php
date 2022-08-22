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
                                            <th scope="col">Имя</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Минимальная сумма</th>
                                            <th scope="col">Транзакции</th>
                                            <th scope="col">Изменить</th>
                                            <th scope="col">Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user['id'] }}</th>
                                                <th scope="row">{{ $user['name'] }} {{ $user['last_name'] }}</th>
                                                <th scope="row">{{ $user['email'] }}</th>
                                                <th scope="row">{{ $user['min_payment'] ?? 100 }} $</th>
                                                <th scope="row">
                                                    <a href="<?= '/admin/users/' . $user['id'] . '/orders'?>"> orders</a>
                                                </th>
                                                <th scope="row">
                                                    <a href="<?= '/admin/users/' . $user['id'] ?>">edit</a>
                                                </th>
                                                <th scope="row">
                                                    <form method="post" action="/admin/userdelete/{{$user['id']}}">
                                                        @csrf
                                                        <input type="submit" value="X">
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
