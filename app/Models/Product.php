<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    /*
       * Relationship: A product can be in many carts
       * @return HasMany
    */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    /*
       * Relationship: A product can appear in many orders
       * @return HasMany
    */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
