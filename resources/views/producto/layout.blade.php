<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ejemplo de Laravel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body{
    background-color: #25274d;
    }
    .container{
    margin-top: 4%;
    background: rgb(250, 163, 27);
    padding: 1%;
    border-radius: 0.5rem;
    }
    .headerP{
      display:flex;
      align-items:center;
      justify-content:center;
    }
    
    </style>
  </head>
  <body>
    <div class="container">
      <br><br><br>
      <header class="headerP">
        <h1 >Gestión de Productos</h1>
      </header>
      @yield('contenido')
    </div>
  </body>
</html>