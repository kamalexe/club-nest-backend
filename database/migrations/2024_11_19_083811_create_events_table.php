<?php

use App\EventType;
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
            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->datetime('start_date');
            $table->integer('duration')->nullable();
            $table->integer('max_capacity');
            $table->string('location');
            $table->integer('guests');
            $table->enum('event_type', array_column(EventType::cases(), 'value'));
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
