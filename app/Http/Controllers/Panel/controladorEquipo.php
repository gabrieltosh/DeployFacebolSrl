<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Equipo;
use Session;
use Alert;
use App\Http\Requests\RequestEquipoCreate;
use App\Http\Requests\RequestEquipoUpdate;
use App\Categoria;
use App\Ciudad;
use App\User;
use Auth;

class controladorEquipo extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
        $this->middleware('sudo');
    }
    public function index()
    {
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $equipos = Equipo::orderBy('id','desc')->paginate('5');
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.equipos.index',compact('equipos','categorias','ciudades','team'));
    }
    public function create()
    {
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('panel.equipos.create',compact('categorias','ciudades','team'));
    }

    public function store(RequestEquipoCreate $request)
    {
            Equipo::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'cargo'=>$request->cargo
        ]);
        Alert::success('Exito!!','El registro se creo correctamente');
        return redirect()->route('equipos.index');
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $equipo = Equipo::find($id);
        return view('panel.equipos.edit',compact('equipo','categorias','ciudades','team'));
    }
    public function update(RequestEquipoUpdate $request, $id)
    {
        $equipo = Equipo::find($id);
        $equipo->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'cargo'=>$request->cargo
           ]);
        $equipo->save();
        Alert::success('Exito!!','El registro se edito correctamente');
        return redirect()->route('equipos.index');
    }
    public function destroy($id)
    {
        $equipo= Equipo::find($id);
        $equipo->delete();
        Alert::success('Exito!!','El registro se elimino correctamente');
        return redirect()->route('equipos.index');
    }
}
