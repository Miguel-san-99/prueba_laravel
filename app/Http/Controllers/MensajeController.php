<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function create(){
        return view('contacto');
    }
    public function store(Request $request)
    {
        dd( $request->all(), $request->correo );
        //validar formulario

        //Guardar en BD

        //Redirigir

    }
}
