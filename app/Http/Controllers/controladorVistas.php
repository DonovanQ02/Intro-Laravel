<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function mostrarformulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('cliente');
    }

    public function procesarCliente(Request $peticion){
        //return $peticion -> all();
        //return $peticion -> path();
        //return $peticion -> url();
        //return $peticion -> ip();

        //return redirect();

        //return redirect('/') -> route('portafolio');

        //redireccion al origen
        //return back();

        $usuario = $peticion->input('txtnombre');

        session()->flash('exito', 'se guardo el usuario '.$usuario);
        return to_route('formulario');
    }
    
}