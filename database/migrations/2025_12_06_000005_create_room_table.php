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
        Schema::create(
            'rooms',
            function (Blueprint $table) {
                $table->id();
                $table->integer('series');
                $table->foreignId('course')->constrained('courses');
                $table->string('shift');
                $table->string('identification');
                $table->boolean('status')->default(true);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
