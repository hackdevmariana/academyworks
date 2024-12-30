<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('url');
            $table->text('text');
            $table->string('language', 5); // ISO 639-1 code (e.g., 'en', 'es')
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
