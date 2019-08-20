<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculoModelsTable extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('vehiculo_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa')->unique();
            $table->string('marca');
            $table->foreign('marca')->references('nombre')->on('marca_models');
            $table->integer('dueno');
            $table->foreign('dueno')->references('cedula')->on('persona_models');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehiculo_models');
    }
}
