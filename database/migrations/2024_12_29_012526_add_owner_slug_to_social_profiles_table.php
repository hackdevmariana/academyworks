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
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->string('owner_slug')->nullable()->after('id');
            $table->dropColumn(['owner_id', 'owner_type']);
        });
    }

    public function down()
    {
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->string('owner_type')->nullable();
            $table->dropColumn('owner_slug');
        });
    }

};
