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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID của người nhận thông báo
            $table->text('content');
            $table->boolean('is_read')->default(false); // Trạng thái đã đọc
            $table->string('url')->nullable(); // Trường lưu đường dẫn
            $table->timestamps(); // Thời gian tạo thông báo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
