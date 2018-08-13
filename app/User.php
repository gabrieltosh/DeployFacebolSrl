<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use App\Publicacion;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ciudad_id','nombre', 'apellido','ci','direccion','celular','email', 'password','imagen','codigo','tipo','activo','cod_face','user_id'   
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('usuarios')->put($name, \File::get($imagen));
        }
    }
    public function setPasswordAttribute($valor){
    if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
    public function empresas()
    {
        return $this->hasMany(Empresas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function publicaciones()
    {
      return $this->hasMany(Publicacion::class);
    }
    public function likes()
    {
      return $this->hasMany(Likes::class);
    }
}
