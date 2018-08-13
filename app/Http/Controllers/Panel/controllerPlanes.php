<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Planes;
use Session;
use Auth;
use App\PlanesDetalle;
use App\Http\Requests\RequestPlanUpdate;
use Alert;
use App\Ciudad;
use App\Categoria;
class controllerPlanes extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
        $this->middleware('sudo');
    }
    public function index()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $planDetalle=PlanesDetalle::all();
        $planes=Planes::orderBy('id','desc')->paginate(5);
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.planes.index',compact('planes','planDetalle','categoria','ciudad','team'));
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $plan=Planes::find($id);
        $planDetalle=PlanesDetalle::all();
        return view('panel.planes.edit',compact('plan','planDetalle'));
    }
    public function update(RequestPlanUpdate $request, $id)
    {
        $planDetalle=PlanesDetalle::all();
        foreach ($planDetalle as $descripcion)
        {

            $descripcion->fill([
                'descripcion'=>$request['nombre-'.$descripcion->id],
            ]);
            $descripcion->save();
        }
        $plan=Planes::find($id);
        $plan->fill([
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'plan'=>$request->plan,
            'moneda'=>$request->moneda
        ]);
        $plan->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('planes.index');
    }
}
