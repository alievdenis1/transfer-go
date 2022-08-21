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

        foreach ($fields as $key => $field) {
            if ($key == 'user_id') continue;
            $order->$key = $field;
        }

        $user = User::find($fields['user_id']);

        $orderArray = $user->orders()->save($order)->toArray();
        $orderArray['created_at'] =  date('d-m-Y', strtotime($orderArray['created_at'] . ' +1 day'));

        return $orderArray;
    }

    public function deleteOrder(int $id)
    {
        UserOrder::find($id)->delete();
    }

    public function updateOrder(array $fields, int $id) {
        $order = UserOrder::find($id);
        foreach ($fields as $key => $field) {
            $order->$key = $field;
        }
        $order->save();

        $orderArray = $order->toArray();
        $orderArray['created_at'] =  date('d-m-Y', strtotime($orderArray['created_at'] . ' +1 day'));

        return $orderArray;
    }
}
