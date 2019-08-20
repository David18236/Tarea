<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaModelsTable extends Migration
{
        public function up()
    {
        Schema::create('persona_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cedula')->unique();
            $table->string('nombre');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('persona_models');
    }
}
