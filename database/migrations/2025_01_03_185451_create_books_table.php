<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->date('publication_date')->nullable();
            $table->string('language')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->integer('pages')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('description')->nullable();
            $table->string('editorial')->nullable();
            $table->string('link_to_buy')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
