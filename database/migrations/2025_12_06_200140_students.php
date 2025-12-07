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
            $table->int('registration');
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('class_id')->constrained('classes');
            $table->boolean('is_active')->default(true);
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
