<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table='likes';
    protected $fillable=['usuario_id','publicacion_id'];

    public function publicacion()
    {
    	return $this->hasMany(Publicacion::class,'publicacion_id');
    }
    public function usuario()
    {
    	return $this->belongsTo(User::class,'usuario_id');
    }
}
