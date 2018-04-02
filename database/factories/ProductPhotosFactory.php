<?php

$factory->define(App\Services\Products\ProductPhotos::class, function (Faker\Generator $faker) {
    return [
        'src' => $faker->imageUrl,
    ];
});
