<?php

namespace App\Services\Order;

use App\Models\User;
use \App\Models\UserOrder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function createOrder(array $fields): array
    {
        $order = new UserOrder();

        $user = User::find($fields['user_id']);
        return $user->orders()->save($order)->toArray();

        /*$table->string('sending_from_country')->nullable();
        $table->string('sending_from_currency')->nullable();

        $table->string('receiver_get_country')->nullable();
        $table->string('receiver_get_currency')->nullable();

        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();

        $table->string('type_pay')->nullable();
        $table->string('type_transaction')->nullable();*/
    }
}
