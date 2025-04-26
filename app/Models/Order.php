<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'user_id', 
        'total', 
        'status'
    ];

    /**
     * Relationship: An order contains many items
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Finalize order from cart
     * @param Cart $cart
     */
    public static function createFromCart(Cart $cart): void
    {
        // Implementation logic here (don't write code per your request)
        // Concept: Create order items from cart items
        // Preserve prices at checkout
    }
}