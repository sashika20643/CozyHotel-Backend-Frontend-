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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('checkin_date')->nullable();
            $table->date('checkout_date')->nullable();
            $table->string('Customer_name')->nullable();
            $table->string('customer_id')->nullable();
            $table->integer('roomtype_id')->nullable();
            $table->integer('room_id')->nullable();


            $table->timestamps();
            $table->foreign('roomtype_id')->references('id')->on('roomtypes')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
