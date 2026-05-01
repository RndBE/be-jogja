<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('read_time')->nullable()->after('author');
            $table->json('tags')->nullable()->after('read_time');
            $table->string('category_color')->nullable()->after('category');
            $table->boolean('is_featured')->default(false)->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['read_time', 'tags', 'category_color', 'is_featured']);
        });
    }
};
