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
        
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);  // 'nombres'
            $table->string('last_name', 255);   // 'apellidos'
            $table->string('email', 255)->unique(); // correo
            $table->date('date_of_birth');     // 'fechaNacimiento'
            $table->string('phone_number', 255)->nullable();  // 'telefono'
            $table->string('gender', 255)->nullable(); // genero
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
