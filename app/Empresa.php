<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=['nombre','descripcion','telefono','email','facebook','direccion','promocion','descuento','horario','web','categoria_id','imagen','usuario_id','ciudad_id','activo','video','latitud','longitud','slug'];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('empresas')->put($name, \File::get($imagen));
        }
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    } 
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
}
