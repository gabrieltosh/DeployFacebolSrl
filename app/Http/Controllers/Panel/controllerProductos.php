<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Producto;
use App\Empresa;
use Session;
use App\Categoria;
use App\Ciudad;
use App\User;
use Auth;

class controllerProductos extends Controller
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
		$productos = Producto::orderBy('id','desc')->paginate('5');
		Session::flash('message','Datos Cargados Correctamente');
		return view('panel.productos.index',compact('productos','categorias','ciudades','team'));
	}
	public function create()
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
 		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
		return view('panel.productos.create',compact('categorias','ciudades','team'));
	}

	public function store(Request $request)
	{
		Producto::create([
			'empresa_id'=>1,
			'nombre'=>$request->nombre,
			'descripcion'=>$request->descripcion,
			'precio'=>$request->precio,
			'descuento'=>$request->descuento,
			'comision'=>$request->comision,
			'tipo'=>$request->tipo,
			'imagen'=>$request->imagen
		]);
		return redirect()->route('productos.index');

	}

	public function edit($id)
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
		$producto = Producto::find($id);
		$tipo = ['Normal','Servicio'];
		return view('panel.productos.edit',compact('producto','tipo','categorias','ciudades','team'));
	}

	public function update(Request $request,$id){

		$producto = Producto::find($id);
		$producto->fill([
			'empresa_id'=>1,
			'nombre'=>$request->nombre,
			'descripcion'=>$request->descripcion,
			'precio'=>$request->precio,
			'descuento'=>$request->descuento,
			'comision'=>$request->comision,
			'tipo'=>$request->tipo,
			'imagen'=>$request->imagen
		]);
		$producto->save();
		return redirect()->route('productos.index');
	}
}
