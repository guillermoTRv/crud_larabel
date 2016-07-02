<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLenguajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_lenguaje');
            $table->string('finalidad');
            $table->string('calificacion');
            $table->string('color');
            $table->timestamps();
            $table->integer('especialidades_id')->unsigned();
            $table->foreign('especialidades_id')->references('id')->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lenguajes');
    }
}
