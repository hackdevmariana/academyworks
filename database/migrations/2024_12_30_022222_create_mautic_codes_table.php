<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mautic_codes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('code'); 
            $table->text('language'); 
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('mautic_codes');
    }
};
