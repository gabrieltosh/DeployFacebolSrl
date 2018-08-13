<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Publicacion;
use Response;
use Auth;
use Image;
use Storage;
use Alert;
use App\Likes;
class controllerPublicacion extends Controller
{
    public function active($publicacion_id,$usuario_id)
    {
        $publicacion=Likes::where('usuario_id',$usuario_id)->where('publicacion_id',$publicacion_id)->first();
        if($publicacion)
        {
            $active=1;
            return $active;
        }else
        {
            $active=0;
            return $active;
        }
    }
    public function like($id)
    {
        $like=Likes::where('usuario_id',Auth::user()->id)->where('publicacion_id',$id)->first();
        $publicacion=Publicacion::find($id);
        if(!$like)
        {
            Likes::create([
                'usuario_id'=>Auth::user()->id,
                'publicacion_id'=>$id,
            ]);
            $publicacion->likes=$publicacion->likes+1;
            $publicacion->save();
        }else
        {
            $like->delete();
            $publicacion->likes=$publicacion->likes-1;
            $publicacion->save();
        }
    }
    public function show($id)
    {
         $publicaciones=Publicacion::with('user','likess')->orderBy('id','desc')->paginate($id);
        return response()->json($publicaciones);
    }
    public function downloadFile($file)
    {
      return response()->download(base_path().'/public_html/imagen/publicaciones/'.$file);
    }
    public function store(Request $request)
    {
        /*if($request->get('imagen'))
        {
          $image = $request->get('imagen');
          $nameImagen = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('imagen'))->save(public_path('imagen/publicaciones/').$nameImagen);
        }else
        {
            $nameImagen=$request->imagen;
        }
        if($request->get('archivo'))
        {
          $archivo = $request->file('archivo');
          $nameArchivo = $archivo->getClientOriginalName();
          \Storage::disk('publicaciones')->put($nameArchivo, \File::get($archivo));
        }else
        {
            $nameArchivo=$request->archivo;
        }*/
        Publicacion::create([
            'imagen'=>$request->imagen,
            'archivo'=>$request->archivo,
            'descripcion'=>$request->descripcion,
            'usuario_id'=>Auth::user()->id
        ]);
        Alert::success('Exito!!','La publicacion de contenido fue un exito');
        return redirect()->route('start-a');
    }
}
