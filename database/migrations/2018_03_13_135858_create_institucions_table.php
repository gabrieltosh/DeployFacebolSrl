<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('qSomos');
            $table->text('frase1');
            $table->text('frase2');
            $table->text('frase3');
            $table->text('trabaja');
            $table->text('desEmpresa');
            $table->string('direccion');
            $table->string('celular');
            $table->string('telefono');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('google');
            $table->string('imagen');
            $table->string('vision');
            $table->string('mision');
            $table->string('banner1');
            $table->string('banner2');
            $table->string('banner3');
            $table->string('titulonoticias');
            $table->text('desnoticias');
            $table->string('tituloctividades');
            $table->text('desactividades');
            $table->string('imgtrabaja');   
            $table->string('titulosomos');
            $table->string('titulosuscribir');
            $table->text('dessuscribir');
            $table->string('titulotrabaja');
            $table->string('tituloplan');
            $table->text('desplan');
            $table->string('nombreplan');
            $table->string('bsprecio');
            $table->string('susprecio');
            $table->string('plan');
            $table->text('benplan1');
            $table->text('benplan2');
            $table->text('benplan3');
            $table->text('benplan4');
            $table->text('benplan5');
            $table->string('tituloequipo');
            $table->text('desequipo');
            $table->string('tituloempresa');
            $table->double('visitas');
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
        Schema::dropIfExists('institucions');
    }
}
