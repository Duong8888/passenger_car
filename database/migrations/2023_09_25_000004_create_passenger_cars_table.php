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
        Schema::create('passenger_cars', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->integer('capacity');
            $table->bigInteger('price');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('route_id')->nullable();
//            $table->foreign('route_id')->references('id')->on('routes');
            $table->unsignedBigInteger('vehicle_id')->default('1')->comment('loại của xe ví dụ như 9 chỗ 11 chỗ 16 chỗ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger_cars');
    }
};
