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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->foreignId(  'teacher-id')->nullable()->constrained('teachers')->onDelete('cascade');
            $table->foreignId(  'student_id')->nullable()->constrained('students')->onDelete('cascade');
            $table->foreignId(  'chapter_id')->nullable()->constrained('chapters')->onDelete('cascade');
            $table->timestamp('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};