<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id(); // This creates an auto-incremented primary key column
            $table->string('student_name', 100)->nullable();
            $table->integer('phone')->nullable(); 
            $table->string('email', 70)->nullable();
            $table->string('local_city', 50)->nullable();
            $table->tinyInteger('course_categories_id');
            $table->string('course_duration',50)->nullable();
            $table->string('Lac_description', 300)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
