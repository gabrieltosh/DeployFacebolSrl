<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Empresa;
use App\Productos;
use App\Ciudad;
use App\Categoria;
use App\User;
use Auth;

class controllerCompras extends Controller
{
    public function empresasAll()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $empresas=Empresa::orderBy('id','asc')->paginate(9);
        return view('panel.compras.empresas',compact('empresas','categorias','ciudades','team'));
    }
    public function empresasCategoria($slug)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $categoria=Categoria::where('slug',$slug)->first();
        $empresas=Empresa::where('categoria_id',$categoria->id)->orderBy('id','asc')->paginate(9);
        return view('panel.compras.empresas',compact('empresas','categorias','ciudades','team'));
    }
    public function empresasCiudad($slug)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $ciudad=Ciudad::where('slug',$slug)->first();
        $empresas=Empresa::where('ciudad_id',$ciudad->id)->orderBy('id','asc')->paginate(9);
        return view('panel.compras.empresas',compact('empresas','categorias','ciudades','team'));
    }
    public function productos($slug)
    {

    }
}

