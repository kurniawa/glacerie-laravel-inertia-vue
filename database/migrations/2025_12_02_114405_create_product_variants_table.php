<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('product_slug');
            $table->string('name'); // e.g., 'Cup 4oz, Jar 300ml'
            $table->string('slug')->unique();
            $table->string('size')->nullable(); // string because some sizes may include length x width
            $table->string('unit', 10)->nullable(); // e.g., 'oz', 'ml', 'g', 'pcs'
            $table->decimal('base_price', 15, 2);
            $table->string('sku', 50)->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
