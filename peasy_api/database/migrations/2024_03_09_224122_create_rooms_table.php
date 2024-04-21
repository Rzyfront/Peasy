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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->string('status', 255);  // 'estado'
            $table->string('type', 50); // 'tipo'
            //$table->decimal('price', 10, 2); // 'precio'
            $table->integer('capacity');// 'capacidad'
            $table->integer('size');// 'tamaño'
            $table->string('view', 255);// 'vista'
            $table->string('room_number', 255); // 'numero de habitacion'
            $table->integer('number_of_beds');   // 'numero de camas'
            $table->string('bed_type', 255);    // 'camas tipo'
            $table->string('bathroom_type', 255);// 'baño tipo'
            $table->timestamps();
        
            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
