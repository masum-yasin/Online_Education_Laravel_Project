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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // This creates an auto-incremented primary key column
            $table->string('course_name', 100);
            $table->decimal('course_fee', 10, 2);
            $table->tinyInteger('course_category_id');
            $table->string('course_duration',50);
            $table->string('image',80)->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('description', 300);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
