<?php

use Faker\Generator as Faker;

$factory->define(App\Services\Products\Product::class, function (Faker $faker) {
    return  [   'slug'=>str_slug('Velg Yokomaha 12inch', '-'),
                'name'=>'Velg Yokomaha 12inch',
                'price'=> '2000000',
                'thumbnail'=> 'src/photos/yokohama12inch.jpg',
                'size'=> 12,
                'status'=> 'Baru',
                'detail'=> 'Lorem ipsum dolor sit amet',
            ];
});
