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
        Schema::create('seat_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passenger_car_id');
            $table->date('date');
            $table->unsignedBigInteger('time_id')->comment('Lu thoi gian xe chay');
            $table->string('seat_status');
            $table->string('seat_id');
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_statuses');
    }
};
