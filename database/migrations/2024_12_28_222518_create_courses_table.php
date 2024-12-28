<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle');
            $table->text('abstract');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('duration');
            $table->string('level');
            $table->string('language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
