<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->integer('planes_id')->unsigned();
            $table->foreign('planes_id')->references('id')->on('planes');
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
        Schema::dropIfExists('planes_detalles');
    }
}
