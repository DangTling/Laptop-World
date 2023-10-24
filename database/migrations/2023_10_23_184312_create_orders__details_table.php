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
        Schema::create('orders__details', function (Blueprint $table) {
            $table->bigInteger('order_id')->nullable(false);
            $table->bigInteger('product_id')->nullable(false);
            $table->bigInteger('quantity')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders__details');
    }
};
