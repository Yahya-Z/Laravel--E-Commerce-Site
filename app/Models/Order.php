<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order()
    {
        // This method defines a one-to-many relationship with the product model.
        // It indicates that an order can have multiple products.
        // The 'product_id' foreign key in the orders table references the id of the product.
        return $this->hasMany(Product::class, 'product_id');
    }
}
