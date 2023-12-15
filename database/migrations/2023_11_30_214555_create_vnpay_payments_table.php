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
        Schema::create('vnpay_payments', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('vnp_TmnCode');
            $table->string('vnp_CreateDate');
            $table->string('vnp_TxnRef');
            $table->string('passenger_car_id');
            $table->string('status');
            $table->string('other_field');
            $table->string('inc_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vnpay_payments');
    }
};
