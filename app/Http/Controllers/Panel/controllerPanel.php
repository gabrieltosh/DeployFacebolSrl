<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\User;
use App\Empresa;
use Image;
use Exception;
use App\Categoria;
use App\Ciudad;
class controllerPanel extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function startAdmin()
    {
        $users=User::count();
        $empresasc=Empresa::count();
        $categorias=Categoria::all();
        $ciudades=Ciudad::all();
        $team=User::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('panel.index',compact('team','users','empresasc','ciudades','categorias'));
    }
    public function panel_user()
    {
        return view('panel-user.index');
    }
}
