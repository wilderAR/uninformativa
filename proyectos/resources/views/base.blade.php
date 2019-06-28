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
                height: auto;
                min-height: 90vh;
                box-shadow:5px 0px 2px 0px #757575;
                z-index: 1;
            }
    
            body::-webkit-scrollbar{
                width: .5vw;
                background-color: #c8c8c8;
            }
            body::-webkit-scrollbar-thumb{
                border-radius: 5px;
                background-color: #212121;
            }
            @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
                z-index: 1;
            }
                .row.content {
                    height: auto;
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
                margin-left:36vw;
            }
            /*Boton Flecha Atras*/
            .btnAtras{
                font-size:2rem;
            }
            .btnAtras:hover{
                color:#757575;
            }
            .blqFooter{
                padding-bottom: 10vh;
                z-index:4;
            }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-dark bg-dark">
                <span class="navbar-brand mb-0 h1">UN&NFORMATIVA</span>
                <div></div>
                <span class="navbar-brand mb-0 h1">@yield('modulo')</span>
                <div></div>
                <span class="navbar-brand mb-0 h1">@yield('desplegable')</span>
                {{-- <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>{{auth->user()->usuario}} 
                </button>--}}
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav" >
                <nav class="sidebar-nav" style="position: relative; top: 2%">
                    <ul id="sidebarnav">
                        <li class="sidebar-item text-black">
                            <h2 class="text-light">@yield('usuario')</h2>
                        </li>
                        <li class="sidebar-item" style="width: 10vw;">
                            <a href="@yield('home')" class="sidebar-link waves-effect waves-dark sidebar-link">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="sidebar-item" style="width: 10vw;">
                            <a href="@yield('url1')" class="sidebar-link waves-effect waves-dark sidebar-link">
                                @yield('cont1')
                            </a>
                        </li>
                        <li class="sidebar-item" style="width: 12vw;">
                            <a href="@yield('url2')" class="sidebar-link waves-effect waves-dark sidebar-link">
                                @yield('cont2')
                            </a>
                        </li>
                        <li class="sidebar-item" style="width: 10vw;">
                            <a href="@yield('url3')" class="sidebar-link waves-effect waves-dark sidebar-link">
                                @yield('cont3')
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10">
                @yield('Contenido')
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue bg-dark text-white pt-4 blqFooter">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-3 mt-md-0 mt-3">
                    <br>
                    <br>
                    <a href="@yield('home')" class="text-white">Inicio -> </a>
                    @yield('migas')
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <br>
                    <br>
                    <h5 class="text-uppercase text-center">Contactanos:</h5>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <p>Facebook: https://www.facebook.com/Unnformativa/</p>
                    <p>Twitter: https://twitter.com/nformativa</p>
                    <p>Correo Electrónico: Un&nformativa@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('../public/js/app.js') }}"></script>
    <script src="{{ asset('../public/js/app-style-swicher.js') }}"></script>
    <script src="{{ asset('../public/js/custom.js') }}"></script>
    <script src="{{ asset('../public/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('../public/js/waves.js') }}"></script>
</body>
</html>
