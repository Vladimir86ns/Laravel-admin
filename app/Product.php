<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [];
    protected $guarded = ['id'];

    /**
     * Get product category for a given product.
     */
    public function products()
    {
        return $this->hasMany(ProductCategory::class);
    }
}
