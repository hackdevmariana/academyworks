<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('subtext')->nullable();
            $table->string('button_link_1')->nullable();
            $table->string('button_text_1')->nullable();
            $table->string('button_link_2')->nullable();
            $table->string('button_text_2')->nullable();
            $table->string('language', 10);
            $table->boolean('is_active')->default(false);
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
