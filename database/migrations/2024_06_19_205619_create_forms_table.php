<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del formulario
            $table->text('description')->nullable(); // Descripción del formulario
            $table->date('publish_date'); // Fecha de publicación
            $table->time('publish_time'); // Hora de publicación
            $table->integer('duration'); // Duración de la evaluación en minutos
            $table->timestamps(); // Campos de fecha de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
};
