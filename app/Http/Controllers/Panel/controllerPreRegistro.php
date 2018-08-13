<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\PreRegistro;
use App\User;
use Session;
use Alert;
use App\Institucion;
use App\Categoria;
use App\Ciudad;
use App\Http\Requests\RequestPreRegistroCreate;
use App\Http\Requests\RequestUsuarioCreate;
use Mail;
use Auth;

class controllerPreRegistro extends Controller
{
    public function index()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $preRegistros=PreRegistro::orderBy('id','desc')->paginate(5);
        return view('panel.preRegistro.index',compact('preRegistros'));
    }
    public function create()
    {
        return view('panel.preRegistro.index',compact('preRegistro'));
    }
    public function store(RequestPreRegistroCreate $request)
    {
        $institucion=Institucion::first();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        PreRegistro::create(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'email'=>$request->email,
                'celular'=>$request->celular,
                'imagen'=>$request->imagen,
                'activo'=>1,
            ]);
        Session::flash('title','El Pre Registro fue un Éxito');
        Session::flash('body','Su pre registro fue un éxito, le mandamos un mensaje a su correo electrónico para mas información revíselo');
        return view('inicio.mensaje',compact('categorias','institucion','ciudades'));
    }
    public function show($id)
    {
        $preRegistro=PreRegistro::where('id',$id)->first();
        $codigo=encrypt($preRegistro->id);
        $pre=['email'=>$preRegistro->email,'nombre'=>$preRegistro->nombre,'apellido'=>$preRegistro->apellido,'codigo'=>$codigo];
        Mail::send('emails.emailPreRegistro',$pre, function ($message) use ($pre) {
            $message->to($pre['email'],$pre['nombre'])
            ->subject('Registro de Usuario Facebol');
        });
        $preRegistro->fill(
            [
                'activo'=>0,
            ]
        );
        $preRegistro->save();
        Alert::success('Exito!!','El correo electronico fue enviado exitosamente');
        return redirect()->route('preregistro.index');
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $preRegistro=PreRegistro::find($id);
        $preRegistro->delete();
        Alert::success('Exito!!','El registro fue eliminado exitosamente');
        return redirect()->route('preregistro.index');
    }
}
