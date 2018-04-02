<?php

namespace App\Services\Orders;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';
    protected $fillable = [
        'order_id','product_id', 'quantity', 'price'
    ];

    public function items()
    {
        return $this->belongsTo(App\Services\Products\Product::class, 'product_id','id');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id','id');
    }
}
