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
        Schema::create('rate_room', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rate_id');  //  'tarifa_id'
            $table->unsignedBigInteger('room_id');  //  'habitacion_id'
            $table->timestamps();
        
            // Foreign Keys
            $table->foreign('rate_id')->references('id')->on('rate');  //  'tarifa'
            $table->foreign('room_id')->references('id')->on('room');  //  'habitacion'
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_room');
    }
};
