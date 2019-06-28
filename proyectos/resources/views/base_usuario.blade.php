<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../public/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../public/css/app.css') }}">
    <title>@yield('title')</title>
    <style>
        .row.content {
            background-color: #ffffff;
            height: 1000px;
            width: 100rem

        }

        .sidenav {
            background-color: #212121;
            height: 100%;
            box-shadow:5px 5px 2px 0px #757575;
        }

        @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        
        }

        .row.content {height: auto;
        }

        }
        a{
            color: #212121;
        }
        a:hover{
            color: dimgrey;
            text-decoration: none;
        }
        /*Boton Menu Usuarios*/
        .btnMenu{
            background-color:#424242;
            width:18vw;
            color:white;
        }
        /*Boton Menu Usuarios*/
        .btnMenu:hover{
            background-color:#6d6d6d;
        }
        /*Boton de Universidades*/
        .btnMenuUni{
            background-color:#424242;
            width:100%;
            color:white;
            margin-top:-10%;
        }
        /*Carta Universidades*/
        .cardUni{
            width:30vw;
            margin-left:25vw;
            margin-top: 5vw;
        }
        /*Boton Flecha Atras*/
        .btnAtras{
            font-size:2rem;
        }
        .btnAtras:hover{
            color:#757575;
        }
        .table{
            width: 75%;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-dark bg-dark">    
                <span class="navbar-brand mb-0 h1">UN&NFORMATIVA</span>
                @yield('buscar')
                <div></div>
                <span class="navbar-brand mb-0 h1">@yield('modulo')</span>
                <div></div>
                <span class="navbar-brand mb-0 h1">@yield('desplegable')</span>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav" >
                <nav class="sidebar-nav" style="position: relative; top: 2%">
                    <ul id="sidebarnav">
                        <li>
                            <form action="" method="get">
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{url('usuario')}}" class="btn btnMenu">Inicio</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('buscar/instituciones')}}" class="btn btnMenu">Instituciones</a>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10">
                @yield('Contenido')
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="{{ asset('../public/js/app.js') }}"></script>
    <script src="{{ asset('../public/js/app-style-swicher.js') }}"></script>
    <script src="{{ asset('../public/js/custom.js') }}"></script>
    <script src="{{ asset('../public/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('../public/js/waves.js') }}"></script>
</body>
</html>