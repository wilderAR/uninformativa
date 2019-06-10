<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-lg navbar-light bg-light">
  
  <h3><font face="Comic Sans MS,Arial,Verdana " color="green">UN&NFORMATIVA</font></h3>
 
            
                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
                <span class="glyphicon glyphicon-home"></span> Instituciones
                </a></td>

                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
                <span class="glyphicon glyphicon-user"></span> Usuarios
                </a></td>

                 <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
                <span class="glyphicon glyphicon-tags"></span> Categorias
                </a></td>

                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
                <span class="glyphicon glyphicon-cog"></span> Configuracion
                </a></td>

                <td><a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
                <span class="glyphicon glyphicon-remove-sign"></span> Cerrar Sesión
                </a></td>
</nav>
    <br>
    <center>
    <section>
        <form action="poner direccion" method="POST">
            <h2>Cambiar Contraseña</h2>
            <table>
                <tr>
                    <td>Contraseña Actual:</td>
                    <td>
                        <input type="password" name="contra_actual_institucion" id="contra_actual_institucion">
                    </td>
                </tr>
                <tr>
                    <td>Contraseña Nueva:</td>
                    <td>
                        <input type="password" name="contra_nueva_institucion" id="contra_nueva_institucion">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="border border-success text-success btn btn-outline-warning btn-lg" value="Cambiar Contraseña" name="btn_cambiar_contra" id="btn_cambiar_contra">
                    </td>
                </tr>
            </table>
        </form>
    </section>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>