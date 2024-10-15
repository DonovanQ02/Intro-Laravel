<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;



Route::get('/', [controladorVistas::class, 'home']) -> name('inicio');
Route::get('/form', [controladorVistas::class, 'formulario']) -> name('formulario');
Route::get('/client', [controladorVistas::class, 'consulta']) -> name('cliente');

route::view('/component', 'componentes') -> name('componentes');

route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente']) -> name('enviar');


/* route::view('/', 'inicio') -> name('inicio');
route::view('/form', 'formulario')-> name('formulario');
route::view('/client', 'cliente') -> name('cliente');
 */
//laravel sniped