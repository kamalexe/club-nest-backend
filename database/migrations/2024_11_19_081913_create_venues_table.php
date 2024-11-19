<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('venues', function (Blueprint $table) {
          $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->text('description');
            $table->integer('max_capacity');
            $table->string('location');
            $table->decimal('ticket_price', 8, 2);
            $table->timestamps();
          });
    }


    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
