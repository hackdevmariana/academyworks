<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            if (!Schema::hasColumn('speakers', 'slug')) {
                $table->string('slug')->unique();
            }

            if (!Schema::hasColumn('speakers', 'photo')) {
                $table->string('photo')->nullable();
            }

            if (!Schema::hasColumn('speakers', 'photo_url')) {
                $table->string('photo_url')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            if (Schema::hasColumn('speakers', 'slug')) {
                $table->dropColumn('slug');
            }

            if (Schema::hasColumn('speakers', 'photo')) {
                $table->dropColumn('photo');
            }

            if (Schema::hasColumn('speakers', 'photo_url')) {
                $table->dropColumn('photo_url');
            }
        });
    }
};
