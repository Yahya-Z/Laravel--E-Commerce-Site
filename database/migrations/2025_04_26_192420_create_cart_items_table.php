<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained()->onDelete('cascade'); // Delete items if cart deleted
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Prevent orphaned items
            $table->integer('quantity')->default(1); // At least 1 item
            $table->timestamps();
            
            // Speed up common queries
            $table->index(['cart_id', 'product_id']);         
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cart_item');
    }
};