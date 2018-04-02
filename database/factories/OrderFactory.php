<?php

$factory->define(App\Services\Orders\Order::class, function (Faker\Generator $faker) {
    return [
        'customer_email' => $faker->email,
        'status' => 'Menunggu Pembayaran',
    ];
});
