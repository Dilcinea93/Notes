<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tema', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo');
            $table->text('post');
            $table->unsignedInteger('curso_id')->nullable();
            //reestriccion de clave foranea a continuacion
            $table->foreign('curso_id')->references('id')->on('curso_models');
        
            $table->rememberToken();
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
        //

        Schema::dropIfExists('tema');
        
    }
}
