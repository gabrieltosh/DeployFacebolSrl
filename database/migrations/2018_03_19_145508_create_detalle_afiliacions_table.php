<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAfiliacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_afiliacions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->integer('afiliacion_id')->unsigned();
            $table->foreign('afiliacion_id')->references('id')->on('afiliacions');
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
        Schema::dropIfExists('detalle_afiliacions');
    }
}
