<?php
use App\Http\Controllers\MensajeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/contacto', [MensajeController::class, 'create']);
Route::post( '/crear-contacto', [MensajeController::class, 'store']);
