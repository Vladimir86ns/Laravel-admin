<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCategory extends Model
{
    public $fillable = [
        'name'
    ];

    /**
     * Get all products for a given loan.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
