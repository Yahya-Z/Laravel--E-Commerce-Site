<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function cart_items()
    {
        // This method defines a one-to-many relationship with the Product model.
        // It indicates that a cart can have multiple products.
        // The 'cart_id' foreign key in the products table references the id of the cart.
        return $this->hasMany(Products::class, 'product_id');
    }
}
