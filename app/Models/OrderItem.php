<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    // this is for the order item table
    // it will contain the order id, product id, quantity, and price at purchase
    // the price at purchase is important for historical accuracy
    // in case the product price changes in the future
    protected $fillable = [
        'quantity',
        'price_at_purchase' // Critical for historical accuracy
    ];

    /**
     * Relationship: Each order item belongs to an order
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship: References the purchased product
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}