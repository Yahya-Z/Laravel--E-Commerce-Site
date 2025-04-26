<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    /*
        protected $fillable = [
            'session_id', // if using session-based carts
            'user_id', // if using user-based carts
        ];
    */

    //////////////////////////////////////////////////////////////////////////
    
    /**
       * Relationship: A cart holds many items
       * @return HasMany
    */
    public function Items(): HasMany
    {
        // This method defines a one-to-many relationship with the CartItem model.
        // It indicates that a cart can have multiple items.
        // The 'cart_id' foreign key in the cart_items table references the id of the cart.
        return $this->hasMany(CartItem::class, 'cart_id');
    }

    /**
       * Calculate total price of all cart items
       * @return float
    */
    public function total(): float
    {
        return $this->Items()->with('productInCart')->get()
        ->sum(fn($item) => $item->product->price * $item->quantity);
    }

}
