<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained()->cascadeOnDelete(); // Relación con modules
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('video_url')->nullable();
            $table->text('content')->nullable();
            $table->unsignedInteger('order')->nullable(); // Para ordenar clases
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
