<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();
            $table->string('route_name')->unique(); 
            $table->string('title')->nullable();
            $table->string('charset')->nullable()->default('utf-8');
            $table->string('lang')->nullable()->default('en');
            $table->string('canonical')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('author')->nullable();
            $table->string('copyright')->nullable();
            $table->string('cache_control')->nullable();
            $table->string('expires')->nullable();
            $table->string('robots')->nullable()->default('index, follow');
            $table->string('referrer')->nullable()->default('origin');
            // Open Graph
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->nullable()->default('website');
            $table->string('og_url')->nullable();
            $table->string('og_site_name')->nullable();
            $table->string('og_locale')->nullable()->default('en_US');
            // Twitter
            $table->string('twitter_card')->nullable()->default('summary');
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('twitter_creator')->nullable();
            // Schema
            $table->string('schema_name')->nullable();
            $table->text('schema_description')->nullable();
            $table->string('schema_image')->nullable();
            // Extensibility
            $table->json('additional_meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_tags');
    }
};
