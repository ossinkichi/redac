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
        Schema::create('room_subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teahcer_id')->constrained('teachers')->onDelete('cascade')->nullable();
            $table->foreignId('room_id')->constrained('classes')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_subject_teacher');
    }
};
