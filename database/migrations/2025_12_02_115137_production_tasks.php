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
            $table->string('product')->nullable();       // nama pastry
            $table->string('customer')->default('Guest');
            $table->integer('quantity')->nullable();     // jumlah / unit
            $table->date('production_date'); // tanggal pembuatan
            $table->tinyInteger('position')->default(0); // urutan dalam hari tsb
            $table->string('status', 20)->default('active'); // active, finished
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
