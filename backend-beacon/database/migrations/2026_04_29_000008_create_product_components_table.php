<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('name');              // e.g. "BL Logger 110", "Water Level Sensor R700"
            $table->string('type');              // "Logger" or "Sensor"
            $table->string('image_1')->nullable(); // gambar1 path
            $table->string('image_2')->nullable(); // gambar2 path
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_components');
    }
};
