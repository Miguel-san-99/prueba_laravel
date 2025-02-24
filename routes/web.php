<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/crear-contacto', function (Request $request) {
    dd($request->all());
    //validar formulario

    //Guardar en BD

    //Redirigir

})
