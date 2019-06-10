<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-lg navbar-light bg-light">
  
  <h3><font face="Comic Sans MS,Arial,Verdana " color="green">UN&NFORMATIVA</font></h3>
                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">Buscar Oferta</a></td>
                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">Perfil</a></td>
                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">Configuración</a></td>
                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">Cerrar Sesión</a></td>
    </nav>
    </center>
    <br>
    <section>
        <table class="table table-striped">
            @foreach ($perfiles as $perfil)
            <tr>
                <td>Usuario:</td>
                <td>
             {{$perfil->usuario}}
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>
                  {{$perfil->nombre}}
                </td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td>
                   {{$perfil->apellido}}
                </td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td>
                    {{$perfil->edad}}
                </td>
            </tr>
            <tr>
                <td>Correo Electronico:</td>
                <td>
                 {{$perfil->correo}}
                </td>
            </tr>
            <tr>
                <td>Nivel de Formación:</td>
                <td>
                 {{$perfil->nivel_formacion}}
                </td>
            </tr>
            @endforeach
        </table>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
