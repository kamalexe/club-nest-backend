<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id')->nullable();
            $table->unsignedBigInteger('venue_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->integer('guests')->nullable();
            $table->timestamps();

            // foreign
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
