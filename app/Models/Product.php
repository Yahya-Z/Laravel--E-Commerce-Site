<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function cart()
    {
        // This method defines a one-to-many relationship with the Cart model.
        // It indicates that a product can belong to multiple carts.
        // The 'cart_id' foreign key in the products table references the id of the cart.
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function order()
    {
        // This method defines a one-to-many relationship with the Order model.
        // It indicates that a product can belong to multiple orders.
        // The 'order_id' foreign key in the products table references the id of the order.
        return $this->belongsTo(Order::class, 'order_id');
    }
}
