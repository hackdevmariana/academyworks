<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendedChannelsTable extends Migration
{
    public function up(): void
    {
        Schema::create('recommended_channels', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true);
            $table->string('text');
            $table->string('url');
            $table->string('logo');
            $table->string('language');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recommended_channels');
    }
}
