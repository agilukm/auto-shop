<?php

$factory->define(App\Services\Orders\OrderItems::class, function (Faker\Generator $faker) {
    return [
        'product_id' => rand(1,5),
        'price' => rand(150000,5000000),
        'quantity'=> rand(1,4)
    ];
});
