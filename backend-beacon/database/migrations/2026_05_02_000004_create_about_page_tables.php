<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Timeline milestones for Tentang Kami page
        Schema::create('company_milestones', function (Blueprint $table) {
            $table->id();
            $table->string('year', 4);
            $table->string('title');
            $table->text('description');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['is_active', 'sort_order']);
        });

        // Sertifikasi & HAKI
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->enum('style', ['light', 'dark'])->default('light');
            $table->string('icon_name')->nullable()->comment('Lucide icon name');
            $table->string('status_label')->default('Certified');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['is_active', 'sort_order']);
        });

        // Contribution pillars
        Schema::create('company_contributions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('metric');
            $table->string('metric_label');
            $table->string('icon_name')->nullable()->comment('Lucide icon name');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['is_active', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_contributions');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('company_milestones');
    }
};
