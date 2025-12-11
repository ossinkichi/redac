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
        Schema::create('content_response', function (Blueprint $table) {
            $table->id();
            $table->integer('student_resgistration_number');
            $table->foreignId('content_id')->constrained('contents')->onDelete('cascade');
            $table->text('response');
            $table->timestamps();

            $table->foreign('student_resgistration_number')->references('registration')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_response');
    }
};
