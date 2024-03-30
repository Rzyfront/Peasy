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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);  //  'nombre'
            $table->string('type', 50)->nullable();//  'tipo'
            $table->decimal('price', 10, 2)->nullable();//  'precio'
            $table->string('description', 255);//  'descripcion'
            $table->string('duration', 255);//  'duracion'
        
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
