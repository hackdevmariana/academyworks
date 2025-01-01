<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('meta_tags', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('route_name');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meta_tags', function (Blueprint $table) {
            //
        });
    }
};
