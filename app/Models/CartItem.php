<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{

    protected $fillable = [
        'quantity',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Relationship: Each cart item references a product
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // use dedicated methods for actions:
    public function incrementQuantity() {
        $this->update(['quantity' => $this->quantity + 1]);
    }

    public function decrementQuantity() {
        if ($this->quantity > 1) {
            $this->update(['quantity' => $this->quantity - 1]);
        } else {
            $this->delete();
        }
    }

}
