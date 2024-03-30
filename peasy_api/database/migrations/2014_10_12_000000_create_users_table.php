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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 'nombres'
            $table->string('last_name', 255)->nullable();  // 'apellidos'
            $table->date('date_of_birth')->nullable();   //  'fecha_nacimiento'
            $table->string('gender', 50)->nullable();  // 'genero'
            $table->string('phone_number', 50)->nullable();  // 'telefono'
            $table->string('email')->unique(); // correo
            $table->timestamp('email_verified_at')->nullable(); // verificacion de correo
            $table->string('address', 50)->nullable(); // direccion
            $table->string('password'); // contraseña
            $table->string('api_token')->nullable();  // 'au_token'
            $table->string('expiry_token')->nullable();
            $table->rememberToken()->nullable(); // token de recuerdo
            $table->string('status', 255)->default("active"); // 'estado' (e.g., "active", "canceled", "pending")
            $table->timestamp('last_login')->default(now());  // Use Laravel's `now()` for timestamps
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
