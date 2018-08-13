<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Alert;
class controllerLogin extends Controller
{
    public function log(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {   
            return redirect()->route('start-a');
    
        }else{
            return redirect()->route('inicio');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('inicio');
    }
}
