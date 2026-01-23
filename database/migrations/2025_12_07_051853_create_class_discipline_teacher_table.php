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
        Schema::create('class_discipline_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teahcer_id')->constrained('teachers')->onDelete('cascade');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('discipline_id')->constrained('subjects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_discipline_teacher');
    }
};
