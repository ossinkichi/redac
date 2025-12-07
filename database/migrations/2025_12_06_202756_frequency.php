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
        Schema::create('frequency', function (Blueprint $table) {
            $table->id();
            $table->foreign('student_registration_number')->references('registration')->on('students');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('discipline_id')->constrained('subjects');
            $table->foreignId('class_id')->constrained('classes');
            $table->boolean('presence')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frequency');
    }
};
