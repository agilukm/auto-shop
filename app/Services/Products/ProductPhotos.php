<?php

namespace App\Services\Products;

use Illuminate\Database\Eloquent\Model;

class ProductPhotos extends Model
{
    protected $table = 'product_photos';
    protected $fillable = [
        'product_id','src'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
