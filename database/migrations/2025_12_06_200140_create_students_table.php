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
            $table->string('full_name');
            $table->integer('registration')->unique();
            $table->string('cpf')->unique();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->foreignId('course_id')->nullable()->constrained('courses');
            $table->foreignId('room_id')->nullable()->constrained('classes');
            $table->boolean('is_active')->default(true);
            $table->boolean('formed')->default(false);
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
