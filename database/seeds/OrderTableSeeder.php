<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Services\Orders\Order::class)->create()->each(function($orderItems) {
            $orderItems->orderItems()->save(factory(App\Services\Orders\OrderItems::class)->make());
        });
    }
}
