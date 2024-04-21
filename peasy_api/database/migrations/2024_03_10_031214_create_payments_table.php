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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');  //  'reserva_id'
            $table->decimal('amount', 8, 2);          //  'importe' 
            $table->string('payment_method');          //  'metodo de pago'
            $table->string('transaction_id');        //  'id_transaccion'
            $table->date('payment_date');             //  'fecha de pago'
            $table->timestamps();
        
            // Foreign Key
            $table->foreign('reservation_id')->references('id')->on('reservations');  //  'reserva' 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
