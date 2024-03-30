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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');  //  'cliente_id'
            $table->unsignedBigInteger('hotel_id'); //  'hotel_id'
            $table->unsignedBigInteger('room_id');    //  'room_id'
            $table->date('check_in_date');          //  'fecha de entrada'
            $table->date('check_out_date');         //  'fecha de salida'
            $table->integer('number_of_guests');    //  'numero de huespedes'
            $table->decimal('price', 10, 2);  //  'precio de reserva'
            $table->string('reservation_status', 255);  //  'reserva estado
            $table->string('payment_method', 255);      //  'metodo de pago'
            $table->string('additional_client_info', 255)->nullable();  //  'info de cliente'
            $table->timestamps();
        
            $table->foreign('client_id')->references('id')->on('client');  //  'cliente'
            $table->foreign('hotel_id')->references('id')->on('hotel'); //  'hotel'
            $table->foreign('room_id')->references('id')->on('room');  //  'habitacion'
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
