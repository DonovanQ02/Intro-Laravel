@extends('layouts.plantilla1')

@section('titulo', 'componentes')

@section('contenido')

    <x-Card encabezado="componente" titulo="Dinamico" textoBoton="Enviar"> hola amigos de youtube, como estan? sean bienvenidos al componente de esta tarjeta</x-Card>
    
    <x-Card encabezado="componente2" titulo="Dinamico2" textoBoton="No enviar" > hola amigos de youtube, como estan? sean bienvenidos al componente de esta tarjeta</x-Card>

    <x-Alert tipo="primary">Holaaaaa, soy azul</x-Alert>
    <x-Alert tipo="secondary">Holaaaa, soy gris</x-Alert>
    <x-Alert tipo="danger">Ay, me enchile y soy rojo</x-Alert>




@endsection