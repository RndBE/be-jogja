<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('component_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_component_id')->constrained()->cascadeOnDelete();
            $table->string('category');       // e.g. "Connectivity & Communication", "Processing & Memory"
            $table->string('spec_name');       // e.g. "Internet Connection (Logger)"
            $table->text('spec_value');        // e.g. "4G Wireless Router, LAN ports..."
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('component_specs');
    }
};
