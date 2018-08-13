<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('ci')->unique();
            $table->text('direccion');
            $table->integer('celular');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('imagen');
            $table->string('codigo')->unique();
            $table->string('cod_face')->unique();
            $table->enum('tipo',['Usuario','Administrador','Empresa','Sadministrador']);
            $table->boolean('activo');
            $table->integer('ciudad_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('users');
    }
}
