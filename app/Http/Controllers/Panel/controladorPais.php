<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pais;
use Alert;
use Exception;
use Session;
use App\Http\Requests\RequestPaisUpdate;
use App\Http\Requests\RequestPaisCreate;
use App\Ciudad;
use App\Categoria;
use App\User;
use Auth;

class controladorPais extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');
    }
    public function index()
    {
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $paises=Pais::orderBy('id','desc')->get();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.pais.index',compact('paises','categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        return view('panel.pais.create',compact('categorias','ciudades','team'));
    }
    public function store(RequestPaisCreate $request)
    {
        try{
        Pais::create(
            [
                'nombre'=>$request->nombre,
            ]
        );
        Alert::success('Registro Realizado','El registro fue un exito');
        return redirect()->route('pais.index');
        }catch(Exception $e){
            Alert::error('Error','El registro '.$request->nombre.' no pudo ser eliminado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
        }
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $pais=Pais::find($id);
        return view('panel.pais.edit',compact('pais','categorias','ciudades','team'));
    }

    public function update(RequestPaisUpdate $request, $id)
    {
        $nombre=Pais::where('id',$id)->first()->nombre;
        try{
            $pais= Pais::find($id);
            $pais->fill(
                [
                    'nombre'=>$request->nombre,
                ]
            );
            $pais->save();
            Alert::success('Edicion Exitosa','El registro fue editado correctamente');
            return redirect()->route('pais.index');
        }catch(Exception $e)
        {
            Alert::error('Error','El registro '.$request->nombre.' no pudo ser editado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
        }
    }
    public function destroy($id)
    {
        $nombre=Pais::where('id',$id)->first()->nombre;
        try
        {
            $pais= Pais::find($id);
            $pais->delete();
            Alert::success('Realizado','El registro '.$nombre.' fue eliminado correctamente');
            return redirect()->route('pais.index');
        }catch(Exception $e){
            Alert::error('Error','El registro '.$nombre.' no pudo ser eliminado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
        }
    }
}
