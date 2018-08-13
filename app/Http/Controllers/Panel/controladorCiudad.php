<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Pais;
use Exception;
use Session;
use App\Http\Requests\RequestCiudadCreate;
use App\Http\Requests\RequestCiudadUpdate;
use Alert;
use App\Categoria;
use Auth;
use App\User;
class controladorCiudad extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');
    }
    public function index()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        /*foreach ($ciudades as $ciudad) {
            $ciudad->fill(['slug'=>str_slug($ciudad->nombre)])->save();
        }*/
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.ciudades.index',compact('ciudades','categorias','team'));
    }
    public function create()
    {
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $paises = Pais::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.ciudades.create', compact('paises','team','categorias','ciudades'));
    }
    public function store(RequestCiudadCreate $request)
    {
       Ciudad::create(
          [
            'nombre'=>$request->nombre,
            'pais_id'=>$request->pais_id,
            'slug'=>str_slug($request->nombre)

          ]

       );
        Alert::success('Exito!!','El registro fue realizado exitosamente');

       return redirect()->route('ciudades.index');
    }
    public function edit($id)
    {
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $paises = Pais::orderBy('id','desc')->pluck('nombre','id');
        $ciudad=Ciudad::Find($id);
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('panel.ciudades.edit',compact('ciudad','paises','categorias','ciudades','team'));

    }
    public function update(RequestCiudadUpdate $request, $id)
    {
        $ciudad= Ciudad::find($id);
        $ciudad->fill(
            [
               'nombre'=>$request->nombre,
                'pais_id'=>$request->pais_id,
                'slug'=>str_slug($request->nombre)
            ]
        );
         $ciudad->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');

        return redirect()->route('ciudades.index');
    }
    public function destroy($id)
    {
        try{
            $ciudad= Ciudad::find($id);
            $ciudad->delete();
            Alert::success('Exito!!','El registro se elimino correctamente');
            return redirect()->route('ciudades.index');
        }catch(Exception $e)
        {
             Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');;
            return redirect()->route('ciudades.index');
        }
    }
}
