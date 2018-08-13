<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Storage;
use App\Empresa;
use App\Ciudad;
use App\Categoria;
use Auth;
use App\User;

class controllerGaleria extends Controller
{
    public function indexGaleria($slug)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
    	if($slug=='empresa')
    	{
            $dir=Storage::disk('empresas')->files();
    		return view('panel.galeria.empresa',compact('dir','categorias','ciudades','team'));
    	}
        if($slug=='usuario')
        {
            $dir=Storage::disk('usuarios')->files();
            return view('panel.galeria.usuario',compact('dir','categorias','ciudades','team'));
        }
        if($slug=='categoria')
        {
            $dir=Storage::disk('categorias')->files();
            return view('panel.galeria.categoria',compact('dir','categorias','ciudades','team'));
        }
        if($slug=='actividad')
        {
            $dir=Storage::disk('actividades')->files();
            return view('panel.galeria.actividad',compact('dir','categorias','ciudades','team'));
        }
    }

}
