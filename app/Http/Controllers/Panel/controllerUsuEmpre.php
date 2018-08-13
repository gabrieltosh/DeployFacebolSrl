<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Ciudad;
use Session;
use Validator;
use App\Http\Requests\RequestUsuarioCreate;
use App\Http\Requests\RequestUsuarioUpdate;
use Alert;
use Exception;
use App\Categoria;
use Auth;

class controllerUsuEmpre extends Controller
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
        $usuarios=User::where('tipo','Empresa')->orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.usuEmpre.index',compact('usuarios','categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $ciudadess=Ciudad::orderBy('id','asc')->pluck('nombre','id');
        $usuarios=User::orderBy('id','desc')->pluck('cod_face','id');
        return view('panel.usuEmpre.create',compact('ciudadess','usuarios','categorias','ciudades','team'));

    }
    public function codigo()
    {
        $codigo=str_random(20);
        $usuario=User::where('codigo',$codigo)->first();
        if($usuario)
        {
            $this->codigo();
        }else{
            return $codigo;
        }
    }
    public function store(RequestUsuarioCreate $request)
    {
            $cod_face=$request->ci."FB";
            User::create(
                [
                    'nombre'=>$request->nombre,
                    'apellido'=>$request->apellido,
                    'ci'=>$request->ci,
                    'direccion'=>$request->direccion,
                    'celular'=>$request->celular,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'imagen'=>$request->imagen,
                    'codigo'=>$this->codigo(),
                    'cod_face'=>$cod_face,
                    'ciudad_id'=>$request->ciudad_id,
                    'activo'=>1,
                    'tipo'=>'Empresa',
                    'user_id'=>$request->user_id,
                ]
            );
            Alert::success('Exito!!','El registro fue realizado exitosamente');
            return redirect()->route('empresa.index');
    }

    public function show($id)
    {
        $usuario=User::find($id);
        if($usuario->activo==1)
        {
            $usuario->fill(
                [
                    'activo'=>0,
                ]);

            $usuario->save();
        }else{
            $usuario->fill(
                [
                    'activo'=>1,
                ]);
            $usuario->save();
        }
        return redirect()->route('empresa.index');
    }

    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $ciudadess=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        $usuario=User::find($id);
        $usuarios=User::orderBy('id','desc')->pluck('cod_face','id');
        return view('panel.usuEmpre.edit',compact('usuario','ciudades','usuarios','ciudadess','categorias','team'));
    }
    public function update(RequestUsuarioUpdate $request, $id)
    {
        $usuario= User::find($id);
        if($request->imagen!=null)
        {
            Storage::disk('usuarios')->delete($usuario->imagen);
        }
        $cod_face=$request->ci."FB";
        $usuario->fill(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'ci'=>$request->ci,
                'direccion'=>$request->direccion,
                'celular'=>$request->celular,
                'email'=>$request->email,
                'password'=>$request->password,
                'imagen'=>$request->imagen,
                'cod_face'=>$cod_face,
                'ciudad_id'=>$request->ciudad_id,
                'tipo'=>'Empresa',
                'user_id'=>$request->user_id,
            ]
        );
        $usuario->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('empresa.index');
    }
    public function destroy($id)
    {
        try{
            $usuario=User::findOrFail($id);
            $usuario->delete();
            Storage::disk('usuarios')->delete($usuario->imagen);
            Alert::success('Exito!!','El registro fue eliminado exitosamente');
            return redirect()->route('empresa.index');
        }catch(Exception $e)
        {
            Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');
            return redirect()->route('empresa.index');
        }
    }
}
