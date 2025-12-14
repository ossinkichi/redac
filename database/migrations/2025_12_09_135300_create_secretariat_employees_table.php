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
        Schema::create('secretariat_employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('cpf')->unique();
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretariat_employees');
    }
};
