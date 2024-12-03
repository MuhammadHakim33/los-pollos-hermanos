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
        Schema::create('delivery', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->char('id_order', 255);
            $table->enum('status', ['pending', 'process', 'shipped', 'delivered', 'failed'])->default('pending');
            $table->timestamps();

            $table->foreign('id_order')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
