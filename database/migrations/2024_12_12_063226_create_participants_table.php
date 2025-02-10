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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('course');
            $table->string('subject')->nullable();
            $table->string('participants_type')->default('individual');
            $table->string('semester')->default('1st Year - 1st Semester');
            $table->string('branch')->default('Computer Science & Engineering');

            $table->timestamps();

            $table->foreignId('competition_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
