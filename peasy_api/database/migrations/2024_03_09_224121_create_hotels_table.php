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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);  // 'nombre'
            $table->string('address', 255);  // 'direccion'
            $table->integer('number_of_rooms');  // 'numero_de_habitaciones'
            $table->string('category', 255); // categoria
            $table->integer('stars'); // estrellas
            $table->string('accommodation_type', 50);  // 'tipo_de_alojamiento'
            $table->string('email', 255);  // 'correo'
            $table->string('phone_number', 50);  // 'telefono'
            $table->string('country', 100)->nullable(); // pais
            $table->string('city', 100)->nullable(); // ciudad
            $table->string('state_province', 100)->nullable();  // 'departamento'
            $table->string('locality', 100)->nullable(); // localidad
            $table->string('postal_code', 50)->nullable();  // 'codigo_postal'
            $table->string('time_zone', 50)->nullable();  // 'zona_horaria'
            $table->decimal('longitude', 11, 8)->nullable(); // longitud
            $table->decimal('latitude', 10, 8)->nullable(); // latitud
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel');
    }
};
