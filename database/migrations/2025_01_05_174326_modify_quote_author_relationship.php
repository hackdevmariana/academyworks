<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyQuoteAuthorRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            // Eliminar la columna quote_author_id
            $table->dropForeign(['quote_author_id']);
            $table->dropColumn('quote_author_id');

            // Agregar la columna author_id
            $table->foreignId('author_id')->nullable()->constrained('authors')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotes', function (Blueprint $table) {
            // Eliminar la columna author_id
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');

            // Restaurar la columna quote_author_id
            $table->foreignId('quote_author_id')->constrained('quote_authors')->cascadeOnDelete();
        });
    }
}
