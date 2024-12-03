<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->string('name');
            $table->string('post');
            $table->boolean('incharge')->default(false);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('image');
            $table->timestamps();

            // Foreign key constraint for club_id (referencing the 'id' field on the 'clubs' table)
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    public function down(): void
    {

        Schema::dropIfExists('members');
    }
};
