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
        Schema::create('reservaciones', function (Blueprint $table){
            $table->id();
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_hotel')->constrained('hoteles');
            $table->foreignId('id_habitacion')->constrained('habitaciones');
            $table->date('fecha_inicio');
            $table->date('fecha_salida');
            $table->integer('montocobro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
