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
            $table->unsignedBigInteger('club_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->integer('max_capacity');
            $table->string('location');
            $table->decimal('ticket_price', 8, 2);
            $table->integer('guests')->nullable();
            $table->timestamps();

            // foreign
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
