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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('instructor_name');
            $table->string('email')->unique();
            $table->timestamp('email_varified_at')->nullable();
            $table->string('password');
            $table->integer('phone');
            $table->string('photo')->nullable();
            $table->tinyInteger('course_categories_id');
            $table->tinyInteger('lessons_id');
            $table->tinyInteger('topics_id');
            $table->tinyInteger('course_id');
            $table->string('title');
             $table->text('description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
