<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPolymorphicRelationToSocialProfiles extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->string('owner_type')->nullable()->after('text'); // Relación polimórfica (tipo del modelo)
            $table->unsignedBigInteger('owner_id')->nullable()->after('owner_type'); // Relación polimórfica (ID del modelo)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('social_profiles', function (Blueprint $table) {
            $table->dropColumn(['owner_type', 'owner_id']);
        });
    }
}
