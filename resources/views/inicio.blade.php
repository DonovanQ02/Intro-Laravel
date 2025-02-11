<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['C:\laragon\www\introLaravel\resources\js\app.js'])
    
    <style>
        body, html {
            height: 100%;
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">¡Bienvenido Turista!</h1>
        <p>Presiona el botón para iniciar....</p>
        <a href="{{ route('formulario') }}" class="btn btn-primary">Ir al Registro</a>
        <a href="/formulario" class="btn btn-success"> Ir al Registro </a>
    </div>
</body>
</html>