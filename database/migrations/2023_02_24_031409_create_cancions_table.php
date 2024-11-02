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
        Schema::create('cancions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('letra');
            $table->string('musica');
            $table->string('imagen');
            $table->string('audio');
            $table->string('video');
            $table->text('estrofa_I');
            $table->text('estrofa_II');
            $table->text('estrofa_III');
            $table->text('estrofa_IV');
            $table->text('estrofa_V');
            $table->text('coro');
            

            
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancions');
    }
};
