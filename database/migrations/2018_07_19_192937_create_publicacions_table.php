<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()            
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen')->nullable();
            $table->string('archivo')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('usuario_id')->unsigned();
            $table->integer('likes')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('publicacions');
    }
}
