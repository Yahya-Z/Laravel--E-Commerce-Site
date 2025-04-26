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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Product title
            $table->text('description'); // Long description
            $table->decimal('price', 8, 2); // Precise decimal for currency (8 digits total, 2 decimal places)
            $table->integer('stock'); // Available quantity
            $table->timestamps(); // Automatic created_at/updated_at timestamps
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
