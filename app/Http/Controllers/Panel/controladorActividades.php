<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actividad;
use Session;
use App\Http\Requests\RequestActividadCreate;
use App\Http\Requests\RequestActividadUpdate;
use Alert;
use App\Ciudad;
use App\Categoria;
use App\User;
use Auth;
class controladorActividades extends Controller
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
        $actividades = Actividad::where('tipo','actividad')->orderBy('id','desc')->get();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.actividades.index',compact('actividades','categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $actividades = Actividad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.actividades.create', compact('actividades','categorias','ciudades','team'));
    }

    public function store(RequestActividadCreate $request)
    {
            Actividad::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'tipo'=>'actividad',
            'activo'=>1,
        ]);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
        return redirect()->route('actividades.index');
    }
    public function show($id)
    {
        $actividad=Actividad::find($id);
        if($actividad->activo==1)
        {
            $actividad->fill([
                'activo'=>0,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }else
        {
            $actividad->fill([
                'activo'=>1,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $actividad= Actividad::find($id);
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        return view('panel.actividades.edit',compact('actividad','categorias','ciudades','team'));
    }
    public function update(RequestActividadUpdate $request,$id)
    {
        $actividad= Actividad::find($id);
        if($request->imagen!=null)
        {
            Storage::disk('actividades')->delete($actividad->imagen);
        }
        $actividad->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'tipo'=>'actividad',
            'activo'=>1,
        ]);
        $actividad->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('actividades.index');
    }
    public function destroy($id)
    {
        $actividad= Actividad::find($id);
        $actividad->delete();
        Storage::disk('actividades')->delete($actividad->imagen);
        Alert::success('Exito!!','El registro se elimino correctamente');
        return redirect()->route('actividades.index');
    }
}
