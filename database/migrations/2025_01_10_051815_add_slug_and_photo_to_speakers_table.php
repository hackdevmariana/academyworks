<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
            $table->string('photo_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->dropColumn(['slug', 'photo', 'photo_url']);
        });
    }
};
