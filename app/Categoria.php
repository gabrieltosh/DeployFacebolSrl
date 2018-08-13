<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Categoria extends Model
{
     protected $table='categorias';
    protected $fillable=['nombre','descripcion','imagen','slug'];

     public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('categorias')->put($name, \File::get($imagen));
        }
    }
    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}


