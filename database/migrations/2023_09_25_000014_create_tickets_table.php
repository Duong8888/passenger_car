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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('username');
            $table->string('phone')->unique();
            $table->string('email');
            $table->string('departure');
            $table->string('arrival');
            $table->unsignedBigInteger('passenger_car_id');
//            $table->foreign('passenger_car_id')->references('id')->on('passenger_cars');
            $table->integer('quantity');
            $table->date('date');
            $table->bigInteger('total_price');
            $table->string('payment_method');
            $table->string('reason');
            $table->string('status')->default(0);
            $table->unsignedBigInteger('time_id');
//            $table->foreign('time_id')->references('id')->on('passenger_car_working_times');
            $table->json('seat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
