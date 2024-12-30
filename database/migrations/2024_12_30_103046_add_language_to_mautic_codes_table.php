<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('mautic_codes', function (Blueprint $table) {
            $table->string('language', 10)->after('code')->default('en'); // Añade el campo 'language'
        });
    }

    public function down(): void
    {
        Schema::table('mautic_codes', function (Blueprint $table) {
            $table->dropColumn('language'); // Elimina el campo en caso de rollback
        });
    }
};
