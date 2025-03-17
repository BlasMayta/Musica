<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained()->onDelete('cascade');
            $table->string('type');// Tipo de pregunta (multiple_choice, checkbox, option_with_text)
            $table->string('label');// Etiqueta de la pregunta
            $table->text('options')->nullable(); // Campo de texto para preguntas con entrada de texto
            $table->boolean('required')->default(false);// Indica si la pregunta es obligatoria
            $table->integer('points')->default(0); // Puntos de la pregunta
            $table->string('correct_answer')->nullable();// Respuesta correcta (puede ser texto o una lista de opciones)
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
        Schema::dropIfExists('questions');
    }
};
