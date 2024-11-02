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
        Schema::create('tippregs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('radio_id');
            $table->foreign('radio_id')->references('id')->on('radios')->onDelete('cascade');

            $table->unsignedBigInteger('check_id');
            $table->foreign('check_id')->references('id')->on('checks')->onDelete('cascade');

            $table->unsignedBigInteger('texto_id');
            $table->foreign('texto_id')->references('id')->on('textos')->onDelete('cascade');
           
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
        Schema::dropIfExists('tippregs');
    }
};
