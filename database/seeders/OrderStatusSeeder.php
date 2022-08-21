<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new OrderStatus();
        $status->name = 'В обработке';
        $status->save();

        $status = new OrderStatus();
        $status->name = 'Отменено';
        $status->save();

        $status = new OrderStatus();
        $status->name = 'Успешно';
        $status->save();

        $status = new OrderStatus();
        $status->name = 'Ошибка реквизитов';
        $status->save();

        $status = new OrderStatus();
        $status->name = 'Отменено банком';
        $status->save();

        $status = new OrderStatus();
        $status->name = 'Ошибка, свяжитесь с поддержкой';
        $status->save();
    }
}
