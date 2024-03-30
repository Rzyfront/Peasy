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
        Schema::create('user_subscription', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // 'usuario_id'
            $table->unsignedBigInteger('subscription_id');  // 'suscripcion_id'
            $table->date('start_date');  // 'fecha_inicio'
            $table->date('end_date')->nullable();  // 'fecha_fin'
            $table->string('type')->nullable(); // tipo
            $table->string('status', 255);  // 'estado' (e.g., "active", "canceled", "pending")
        
            // Foreign Keys
            $table->foreign('user_id')->references('id')->on('user');  //  'usuario' 
            $table->foreign('subscription_id')->references('id')->on('subscription');  //  'suscripcion' 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscription');
    }
};
