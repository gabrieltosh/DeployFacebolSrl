<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanesDetalle extends Model
{
    protected $table='planes_detalles';
    protected $fillable=['descripcion'];
}
