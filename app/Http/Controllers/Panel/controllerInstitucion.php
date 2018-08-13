<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Institucion;
use Session;
use Alert;
use Storage;
use App\Ciudad;
use App\Categorias;
use App\User;
use Auth;

class controllerInstitucion extends Controller
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
        $institucion = Institucion::first();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.institucion.index',compact('institucion','categorias','ciudades','team'));
    }
    public function create()
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        return redirect()->route('institucion.index',compact('categorias','ciudades','team'));
    }
    public function updateDatos(Request $request,$tag)
    {
        if($tag == 'frases')
        {
            Institucion::find(1)->fill([
                'frase1'=>$request->frase1,
                'frase2'=>$request->frase2,
                'frase3'=>$request->frase3,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'somos')
        {
            Institucion::find(1)->fill([
                'titulosomos'=>$request->titulosomos,
                'qsomos'=>$request->qsomos,
                'mision'=>$request->mision,
                'vision'=>$request->vision,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'trabaja')
        {
            Institucion::find(1)->fill([
                'titulotrabaja'=>$request->titulotrabaja,
                'trabaja'=>$request->trabaja,
                'imgtrabaja'=>$request->imgtrabaja,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'plan')
        {
            Institucion::find(1)->fill([
                'tituloplan'=>$request->tituloplan,
                'desplan'=>$request->desplan,
                'nombreplan'=>$request->nombreplan,
                'bsprecio'=>$request->bsprecio,
                'susprecio'=>$request->susprecio,
                'plan'=>$request->plan,
                'benplan1'=>$request->benplan1,
                'benplan2'=>$request->benplan2,
                'benplan3'=>$request->benplan3,
                'benplan4'=>$request->benplan4,
                'benplan5'=>$request->benplan5,

            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'actividades')
        {
            Institucion::find(1)->fill([
                'tituloactividades'=>$request->tituloactividades,
                'desactividades'=>$request->desactividades,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'noticias')
        {
            Institucion::find(1)->fill([
                'titulonoticias'=>$request->titulonoticias,
                'desnoticias'=>$request->desnoticias,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'suscribir')
        {
            Institucion::find(1)->fill([
                'titulosuscribir'=>$request->titulosuscribir,
                'dessuscribir'=>$request->dessuscribir,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag == 'contacto')
        {
             Institucion::find(1)->fill([
                'direccion'=>$request->direccion,
                'celular'=>$request->celular,
                'telefono'=>$request->telefono,
                'email'=>$request->email,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'youtube'=>$request->youtube,
                'instagram'=>$request->instagram,
                'google'=>$request->google,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag=='empresa')
        {
            Institucion::find(1)->fill([
                'tituloempresa'=>$request->tituloempresa,
                'desEmpresa'=>$request->desEmpresa,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
        if($tag =='equipo')
        {
            Institucion::find(1)->fill([
                'tituloequipo'=>$request->tituloequipo,
                'desequipo'=>$request->desequipo,
            ])->save();
            Alert::success('Exito!!','Los datos fueron editados correctamente');
            return redirect()->route('institucion.index');
        }
    }
    public function updateImagen(Request $request,$tag)
    {
        $imagen=Institucion::find(1);
        Storage::disk('institucion')->delete($imagen->$tag);
        $imagen->fill([
            $tag=>$request->imagen,
        ])->save();
        Alert::success('Exito!!','La imagen fue editada exitosamente');
        return redirect()->route('institucion.index');
    }
    public function store(Request $request)
    {
        /*
        Institucion::create([
            'qSomos'=>$request->qSomos,
            'frase1'=>$request->frase1,
            'frase2'=>$request->frase2,
            'frase3'=>$request->frase3,
            'trabaja'=>$request->trabaja,
            'direccion'=>$request->direccion,
            'celular'=>$request->celular,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'google'=>$request->google,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
        ]);
        return redirect()->route('institucion.index');*/
    }
    public function edit($id)
    {
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $institucion=Institucion::find($id);
        return view('panel.institucion.edit',compact('institucion','categorias','ciudades','team'));
    }
    public function update(Request $request, $id)
    {
        $institucion=Institucion::find($id);
        $institucion->fill([
            'qSomos'=>$request->qSomos,
            'frase1'=>$request->frase1,
            'frase2'=>$request->frase2,
            'frase3'=>$request->frase3,
            'trabaja'=>$request->trabaja,
            'direccion'=>$request->direccion,
            'celular'=>$request->celular,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'google'=>$request->google,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
            'desEmpresa'=>$request->desEmpresa,
        ]);
        $institucion->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('institucion.index');
    }
}
