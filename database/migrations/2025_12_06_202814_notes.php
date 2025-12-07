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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('student_registration_number');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('discipline_id')->constrained('subjects');
            $table->float('note_value');
            $table->integer('unit');
            $table->timestamps();

            $table->foreign('student_registration_number')->references('registration')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
