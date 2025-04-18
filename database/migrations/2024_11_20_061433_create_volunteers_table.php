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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->nullable(); // e.g., "Coordinator", "Helper"
            $table->timestamps();

            // foreign
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
