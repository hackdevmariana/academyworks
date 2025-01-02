<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSocialProfilesTableForPolymorphicRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->dropColumn('owner_slug'); // Elimina la columna antigua
            $table->morphs('owner'); // Añade columnas owner_id y owner_type
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->string('owner_slug')->nullable(); // Restaura la columna antigua
            $table->dropMorphs('owner'); // Elimina las columnas polimórficas
        });
    }
}
