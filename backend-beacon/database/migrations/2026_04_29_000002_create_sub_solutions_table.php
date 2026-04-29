<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_solutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solution_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('abbreviation', 20)->nullable(); // AWLR, AWGC, etc.
            $table->text('main_content')->nullable();
            $table->text('support_content')->nullable();
            $table->text('application_content')->nullable();
            $table->string('icon')->nullable();
            $table->string('video_url')->nullable();
            $table->string('file_3d_local')->nullable();
            $table->string('link_3d')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_solutions');
    }
};
