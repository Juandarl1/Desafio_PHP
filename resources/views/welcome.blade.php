<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Veterinario</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #d64526;
                color: #ffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

       .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: top;
                display: flex;
                justify-content: top;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title m-b-md">
                    <b>Citas Veterinario</b>
                </div>

                <div class="links">
                <h2 class="mt-4">Inicio</h2>
      <hr>
      <form action="{{route('insertar')}}" method="post">
      @csrf
      <div class="form-group">
          <label for="nombre">Nombre y apellidos</label>
          <input type="text" name="nombre" id="nombre_apellido" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Nombre mascota</label>
          <input type="text" name="mascota" id="nombre_mascota" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Cedula</label>
          <input type="text" name="cedula" id="cedula" class="form-control">
        </div>
        

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
        </div>

        <div class="form-group">
          <input type="button" href="datos.blade.php" value="consultar">
          
        </div>
        </<form>
        </<form>
            
        <div class="form-group">
        <<thead>

        <th> 
            Cedula
        </th>

        <th> 
            Nombre y apellido
        </th>

        <th> 
            Nombre mascota
        </th>

      


        </thead> 
        
         </div>

        
                
                </div>
            </div>
        </div>
    </body>
</html>
