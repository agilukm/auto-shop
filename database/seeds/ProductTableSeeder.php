<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Services\Products\Product::class)->create()->each(function($product_photos) {
            $product_photos->photos()->save(factory(App\Services\Products\ProductPhotos::class)->make());
        });
    }
}
