<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->foreignId('student_id')->constrained()->cascadeOnDelete(); // Relación con students
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();  // Relación con courses
            $table->integer('points')->default(0); // Puntos obtenidos en el curso
            $table->timestamps(); // created_at y updated_at
            $table->unique(['student_id', 'course_id']); // Garantiza unicidad de la relación
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_courses');
    }
}
