<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_solution_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('highlight_points')->nullable(); // JSON array of highlight strings
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('main_image')->nullable();
            $table->string('brochure_pdf')->nullable();
            $table->string('link_lkpp_general')->nullable();
            $table->string('link_lkpp_regency')->nullable();
            $table->string('link_tkdn')->nullable();
            $table->string('use_case')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
