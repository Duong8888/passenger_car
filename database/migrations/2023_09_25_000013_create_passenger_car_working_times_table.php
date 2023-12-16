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
        Schema::create('passenger_car_working_times', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('working_time_id');
//            $table->foreign('working_time_id')->references('id')->on('working_times');
            $table->unsignedBigInteger('passenger_car_id');
//            $table->foreign('passenger_car_id')->references('id')->on('passenger_cars');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger_car_working_times');
    }
};
