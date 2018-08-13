<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Categoria;
use Auth;
use Alert;
use Session;
use Exception;
use App\Http\Requests\RequestCategoriaCreate;
use App\Http\Requests\RequestCategoriaUpdate;
use Storage;
use App\Ciudad;
use App\User;

class controllerCategoria extends Controller
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
        /*foreach ($categorias as $categoria) {
            $categoria->fill(['slug'=>str_slug($categoria->nombre),])->save();
        }*/
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.categorias.index',compact('categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        return view('panel.categorias.create',compact('categorias','ciudades','team'));
    }

    public function store(RequestCategoriaCreate  $request)
    {
        Categoria::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'slug'=>str_slug($request->nombre)
        ]);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
        return redirect()->route('categorias.index');
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $categoria=Categoria::find($id);
        return view('panel.categorias.edit',compact('categoria','categorias','ciudades','team'));
    }
    public function update(RequestCategoriaUpdate  $request, $id)
    {
        $categoria= Categoria::find($id);
        if($request->imagen!=null)
        {
            Storage::disk('categorias')->delete($categoria->imagen);
        }
        $categoria->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'slug'=>str_slug($request->nombre)
        ]);
        $categoria->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('categorias.index');
    }
    public function destroy($id)
    {
        try{
            $categoria= Categoria::find($id);
            $categoria->delete();
            Storage::disk('categorias')->delete($categoria->imagen);
            Alert::success('Exito!!','El registro se elimino correctamente');
            return redirect()->route('categorias.index');
        }catch(Exception $e)
        {
            Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');
            return redirect()->route('categorias.index');
        }
    }
}
