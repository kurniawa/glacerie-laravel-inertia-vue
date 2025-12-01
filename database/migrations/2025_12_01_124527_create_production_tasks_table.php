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
            $table->string('product');       // nama pastry
            $table->string('customer')->nullable();
            $table->integer('quantity');     // jumlah / unit
            $table->date('production_date'); // tanggal pembuatan
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
