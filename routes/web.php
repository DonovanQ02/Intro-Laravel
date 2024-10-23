<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// Rutas de tu aplicación
Route::get('/', [controladorVistas::class, 'home'])->name('inicio');
Route::get('/formulario', [controladorVistas::class, 'mostrarformulario'])->name('formulario');

// Aquí se llama al método 'convertirUnidades' en lugar de 'repaso1'
Route::get('/cliente', [controladorVistas::class, 'consulta'])->name('cliente');
Route::post('/enviarCliente', [controladorVistas::class, 'procesarcliente'])->name('enviarCliente');
