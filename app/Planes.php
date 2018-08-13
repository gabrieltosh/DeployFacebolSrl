<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    protected $table='planes';
    protected $fillable=['nombre','precio','plan','moneda'];
}
