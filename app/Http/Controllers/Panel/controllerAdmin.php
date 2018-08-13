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

class controllerAdmin extends Controller
{
   public function __construct()
    {
        $this->middleware('panel');
        $this->middleware('sudo');
    }
    public function index()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $admins=User::where('tipo','Administrador')->orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.admins.index',compact('admins','categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $ciudadess=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        $admins=User::orderBy('id','desc')->pluck('cod_face','id');
        return view('panel.admins.create',compact('ciudadess','admins','categorias','ciudades','team'));
    }
    public function codigo()
    {
        $codigo=str_random(20);
        $admin=User::where('codigo',$codigo)->first();
        if($admin)
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
                    'tipo'=>'Administrador',
                    'user_id'=>$request->user_id,
                ]
            );
            Alert::success('Exito!!','El registro fue realizado exitosamente');
            return redirect()->route('administradores.index');
    }

    public function show($id)
    {
        $admin=User::find($id);
        if($admin->activo==1)
        {
            $admin->fill(
                [
                    'activo'=>0,
                ]);

            $admin->save();
        }else{
            $admin->fill(
                [
                    'activo'=>1,
                ]);
            $admin->save();
        }
        return redirect()->route('administradores.index');
    }

    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $ciudadess=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        $admin=User::find($id);
        $admins=User::orderBy('id','desc')->pluck('cod_face','id');
        return view('panel.admins.edit',compact('admin','ciudadess','admins','ciudades','categorias','team'));
    }

    public function update(Request $request, $id)
    {
        $admin= User::find($id);
        if($request->imagen!=null)
        {
            Storage::disk('usuarios')->delete($admin->imagen);
        }
        $cod_face=$request->ci."FB";
        $admin->fill(
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
                'tipo'=>'Administrador',
                'user_id'=>$request->user_id,
            ]
        );
        $admin->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('administradores.index');
    }
    public function destroy($id)
    {
        try{
            $admin=User::findOrFail($id);
            $admin->delete();
            Storage::disk('usuarios')->delete($admin->imagen);
            Alert::success('Exito!!','El registro fue eliminado exitosamente');
            return redirect()->route('administradores.index');
        }catch(Exception $e)
        {
            Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');
            return redirect()->route('administradores.index');
        }

    }
}
