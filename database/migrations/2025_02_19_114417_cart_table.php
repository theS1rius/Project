<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id(); // 自動建立 bigIncrements
            $table->foreignId('merchandise_id')->constrained('merchandise')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('count');
            $table->timestamps();

            // 設定唯一索引，確保一個使用者只能對一個商品有一筆購物車記錄
            $table->unique(['user_id', 'merchandise_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};