<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ciudad;
use App\Categoria;
use App\User;
use Session;
use Alert;
use Storage;
use Image;
use App\Http\Requests\RequestEmpresaCreate;
use App\Http\Requests\RequestEmpresaUpdate;
use Auth;

class controllerEmpresa extends Controller
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
		$empresas = Empresa::orderBy('id','desc')->get();
		/*foreach ($empresas as $empresa) {
			$empresa->fill([
				'slug'=>str_slug($empresa->nombre),
			])->save();
		}*/
		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.empresas.index',compact('empresas','categorias','ciudades','team'));

    }
	public function create()
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
      	$usuarios = User::where('tipo','Empresa')->orderBy('id','desc')->pluck('cod_face','id');
      	$categoriass = Categoria::orderBy('id','desc')->pluck('nombre','id');
    	$ciudadess = Ciudad::orderBy('id','desc')->pluck('nombre','id');
    	return view('panel.empresas.create', compact('ciudadess','usuarios','categoriass','categorias','ciudades','team'));

	}
	public function show($id)
	{
		$empresa=Empresa::find($id);
		if($empresa->activo==1)
		{
			$empresa->fill([
				'activo'=>0,
			]);
			$empresa->save();
		}else{
			$empresa->fill([
				'activo'=>1,
			]);
			$empresa->save();
		}
		return redirect()->route('empresas.index');
	}

	public function store(RequestEmpresaCreate $request)
	{
		Empresa::create([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
		 		'direccion'=>$request->direccion,
		 		'promocion'=>$request->promocion,
		 		'descuento'=>$request->descuento,
		 		'horario'=>$request->horario,
		 		'activo'=>1,
				'web'=>$request->web,
		 		'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'cod_face'=>$request->cod_face,
		 		'usuario_id'=>$request->usuario_id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video,
				'slug'=>str_slug($request->nombre),
				'latitud'=>$request->latitud,
				'longitud'=>$request->longitud,
			]);
		$empresa=Empresa::where('slug',str_slug($request->nombre))->first();
		$image = Image::make(base_path().'/public_html/imagen/empresas/'.$empresa->imagen);
        $image->resize(700,400);
        $image->save( base_path().'/public/imagen_html/empresas/'.$empresa->imagen);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
		return redirect()->route('empresas.index');
   	}
   	public function edit($id)
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
      	$usuarios = User::where('tipo','Empresa')->orderBy('id','desc')->pluck('cod_face','id');
		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
      	$categoriass = Categoria::orderBy('id','desc')->pluck('nombre','id');
   		$ciudadess = Ciudad::orderBy('id','desc')->pluck('nombre','id');
   		$empresa = Empresa::find($id);
   		return view('panel.empresas.edit',compact('empresa','ciudadess','categoriass','usuarios','categorias','ciudades','team'));

   	}
   	public function update(RequestEmpresaUpdate $request, $id)
   	{
		$empresa = Empresa::find($id);
		if($request->imagen!=null)
        {
            Storage::disk('empresas')->delete($empresa->imagen);
        }
			$empresa->fill([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
				'direccion'=>$request->direccion,
				'promocion'=>$request->promocion,
				'descuento'=>$request->descuento,
				'horario'=>$request->horario,
				'web'=>$request->web,
				'cod_face'=>$request->cod_face,
				'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'usuario_id'=>$request->usuario_id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video,
				'slug'=>str_slug($request->nombre),
				'latitud'=>$request->latitud,
				'longitud'=>$request->longitud,
			]);
			$empresa->save();
		  	$image = Image::make(base_path().'/public_html/imagen/empresas/'.$empresa->imagen);
            $image->resize(700,400);
            $image->save( base_path().'/public_html/imagen/empresas/'.$empresa->imagen);
			Alert::success('Exito!!','El registro fue editado exitosamente');
		    return redirect()->route('empresas.index');

   	}
   	public function destroy($id)
   	{
   		$empresa=Empresa::find($id)->delete();
        Storage::disk('empresas')->delete($empresa->imagen);
		Alert::success('Exito!!','El registro fue eliminado exitosamente');
   		return redirect()->route('empresas.index');
   	}
}
