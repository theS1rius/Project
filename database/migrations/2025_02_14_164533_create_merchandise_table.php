<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('merchandise', function (Blueprint $table) {
            $table->id();
            $table->string('status',1)->default('C');
            $table->string('name',80)->nullable();
            $table->text('introduction')->nullable();
            $table->string('photo',50)->nullable();
            $table->integer('price')->default(0);
            $table->integer('remain_count')->default(0);
            $table->timestamps();
            $table->index(['status'], 'merchandise_status_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandise');
    }
};
