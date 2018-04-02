<?php

namespace App\Services\Orders;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_email','status'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id','id');
    }
}
