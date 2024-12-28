<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            // Eliminar el índice único del slug
            $table->dropUnique(['slug']);
            
            // Crear un índice único compuesto por slug y locale
            $table->unique(['slug', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            // Eliminar el índice único compuesto por slug y locale
            $table->dropUnique(['slug', 'locale']);
            
            // Restaurar la unicidad del slug
            $table->unique('slug');
        });
    }
};
