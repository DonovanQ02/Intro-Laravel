@extends('layouts.plantilla1')

@section('titulo', 'formulario')

    @section('contenido')
    {{-- Inicia Tarjeta con formulario --}}
    <div class="container mt-5 col-md-6">

        @if(session('exito'))
            <x-Alert tipo='success'> {{ session('exito')}} </x-Alert>
        @endif

        @session('exito')
            <x-Alert tipo='danger'> {{ $value}} </x-Alert>

        @endsession

        @session('exito')
        <script>
            Swal.fire({
                title: "respuesta del servidor",
                text: "{{$value}}",
                icon: "success"
            });
        </script>

        @endsession

        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
               {{__('Registro de Clientes')}} 
            </div>
            <div class="card-body text-justify">
                <form action="/enviarCliente" method= "POST">
                    @csrf 
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}:</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                        <small>{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}:</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                        <small>{{ $errors->first('txtapellido') }}</small>

                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}:</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                        <small>{{ $errors->first('txtcorreo') }}</small>

                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}:</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
                        <small>{{ $errors->first('txttelefono') }}</small>

                    </div>
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Cliente')}}</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
            </div>
        </div>
    </div>
    {{-- Finaliza Tarjeta con formulario --}}
@endsection