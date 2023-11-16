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
        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->string('stop_name');
            $table->integer('stop_type');
            $table->unsignedBigInteger('route_id');
            $table->integer('order')->comment('xác định thứ tự điểm dừng trên tuyến');
            $table->json('user_id')->comment('giúp quản lý điểm dừng theo nhà xe');
//            $table->foreign('route_id')->references('id')->on('routes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stops');
    }
};
