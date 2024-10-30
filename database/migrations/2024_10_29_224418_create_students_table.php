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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
        
            $table->bigInteger('ssn');
            $table->string('image');
            $table->integer('phone');
            $table->enum('grade',['الصف الثالث الثانوى','الصف الثانى الثانوى','الصف الأول الثانوى','الصف الثالث الاعدادى','الصف الثانى الاعدادى','الصف الأول الاعدادى']);
            $table->foreignId( 'user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};