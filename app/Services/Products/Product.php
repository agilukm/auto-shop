<?php

namespace App\Services\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug','name', 'price', 'thumbnail', 'size', 'status', 'detail'
    ];

    public function photos()
    {
        return $this->hasMany(ProductPhotos::class, 'product_id', 'id');
    }
}
