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
        Schema::create('bolos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
            $table->tinyText('datos_relevantes')->nullable();
            $table->boolean('terminado')->default(0);
            $table->boolean('ciclo1')->default(0);
            $table->boolean('ciclo2')->default(0);
            $table->boolean('ciclo3')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolos');
    }
};
