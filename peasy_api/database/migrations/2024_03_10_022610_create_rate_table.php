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
        Schema::create('rate', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nombre
            $table->text('description'); // descripcion
            $table->decimal('price', 8, 2); // precio
            $table->date('start_date'); // fecha de inicio
            $table->date('end_date'); // fecha de fin
            $table->string('type')->nullable(); // tipo
            $table->json('day_of_week')->nullable(); // dias de la semana
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate');
    }
};
