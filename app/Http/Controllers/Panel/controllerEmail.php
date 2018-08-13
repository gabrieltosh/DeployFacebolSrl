<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Email;
use Session;
use Alert;
use Exception;
use App\Http\Requests\RequestEmailUpdate;
use App\Ciudad;
use App\Categoria;
use App\User;
use Auth;
class controllerEmail extends Controller
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
  		$emails = Email::orderBy('id','desc')->get();
  		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.emails.index',compact('emails','categorias','ciudades','team'));

    }
	public function create()
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
    	return view('panel.emails.create',compact('categorias','ciudades','team'));
    }
   	public function store(Request $request){

   		Email::create([
   			'email'=>$request->email,
   		]);
      Alert::success('Exito!!','El registro fue realizado exitosamente');
   		return redirect()->route('email.index');

   	}

	public function edit($id)
	{
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
		$categorias=Categoria::all();
        $ciudades=Ciudad::all();
   		$email = Email::find($id);
   		return view('panel.emails.edit',compact('email','categorias','ciudades','team'));
   	}

   	public function update(RequestEmailUpdate $request, $id)
    {

  		$email = Email::find($id);
     		$email->fill([
     			'email'=>$request->email,
  		   ]);
  		$email->save();
        Alert::success('Exito!!','El registro fue realizado exitosamente');
     		return redirect()->route('email.index');
	   }
	public function destroy($id)
	{
		$email =Email::find($id);
		$email->delete();
		Alert::success('Exito!!','El registro se elimino correctamente');
		return redirect()->route('email.index');
	}
}
