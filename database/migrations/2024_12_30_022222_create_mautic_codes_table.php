<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mautic_codes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del código
            $table->string('slug')->unique(); // Identificador único
            $table->text('code'); // Código de Mautic
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mautic_codes');
    }
};
