<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HojaVidaController extends Controller
{

    public function index(){
       return view('hojaVida/index');
    }
    //
    public function hojaVida(Request $request,$nombre){
        return view('HojaVida/'.$nombre.'');
    }

    public function formulario(Request $request,$nombre){
       return view('Form/Form'.$nombre.'');
    }
}
