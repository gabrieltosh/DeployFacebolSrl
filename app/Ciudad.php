<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='ciudads';
    protected $fillable=['nombre','pais_id','slug'];

    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    public function empresas()
    {
        return $this->hasMany(User::class);
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}

