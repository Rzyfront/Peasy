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
        Schema::create('user_hotel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  //  'usuarios_id'
            $table->unsignedBigInteger('hotel_id'); //  'hotel_id'
            $table->string('role', 255);            //  'rol'
        
            // Foreign Keys
            $table->foreign('user_id')->references('id')->on('user');  //  'usuarios'
            $table->foreign('hotel_id')->references('id')->on('hotel'); //  'hoteles'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_hotel');
    }
};
