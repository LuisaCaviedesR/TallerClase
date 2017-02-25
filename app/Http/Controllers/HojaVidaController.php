<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HojaVidaController extends Controller
{

    public function index(){
       return view('HojaVida/index');
    }
    //
    public function hojaVida(Request $request,$nombre){
        return view('HojaVida/'.$nombre.'');
    }
}
