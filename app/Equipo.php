<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Equipo extends Model
{
    protected $table='equipos';
    protected $fillable=['nombre','imagen','facebook','twitter','instagram','descripcion','cargo'];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('equipos')->put($name, \File::get($imagen));
        }
    }
}
