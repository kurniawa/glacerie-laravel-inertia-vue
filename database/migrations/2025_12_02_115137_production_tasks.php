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
        Schema::create('production_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('table_name')->nullable(); // nama tabel yang terkait dengan product_id, biasanya 'product_variants'
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('product')->nullable();       // nama pastry
            $table->string('customer')->nullable();
            $table->integer('quantity')->nullable();     // jumlah / unit
            $table->date('production_date')->nullable(); // tanggal pembuatan
            $table->integer('position')->default(0); // urutan dalam hari tsb
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_tasks');
    }
};
