<?php

use Illuminate\Support\Facades\Route;

route::view('/', 'inicio') -> name('inicio');
route::view('/form', 'formulario')-> name('formulario');
route::view('/client', 'cliente') -> name('cliente');
route::view('/component', 'componentes') -> name('componentes');
