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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_name')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('receiver_address')->nullable(false);
            $table->integer('receiver_phone_number')->nullable(false);
            $table->integer('status')->nullable(false);
            $table->bigInteger('total_payment')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
