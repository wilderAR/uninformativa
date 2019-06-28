<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../public/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../public/css/style.') }}">
    <link rel="stylesheet" href="{{ asset('../public/css/') }}">
    <title>@yield('title')</title>
    <style>
            .row.content {
                background-color: #f1f8e9;
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
                margin-left:36vw;
            }
            /*Boton Flecha Atras*/
            .btnAtras{
                font-size:2rem;
            }
            .btnAtras:hover{
                color:#757575;
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
            </nav>

        </div>
        <div class="container mt-5">
            <div class="row justify-content-start">
                <div class="col">
                    <div class="card ">
                        <label for="" class="card-title text text-center"> 
                            <h2>@yield('opcion1')</h2>
                        </label>   
                        <a href="@yield('ruta1')" class="card-body center-block" style="display:block;margin:auto;">
                            <img src="@yield('img1')" alt="" class="img-fluid" style=" border-radius: 50%; width: 40vw">
                        </a> 
                    </div>
                </div>
                <div class="col">

                        <div class="card ">
                            <label for="" class="card-title text text-center"> 
                                <h2>@yield('opcion2')</h2>
                            </label>   
                            <a href="@yield('ruta2')" class="card-body center-block" style="display:block;margin:auto;">
                                <img src="@yield('img2')" alt="" class="img-fluid" style=" border-radius: 50%; width: 40vw">
                            </a> 
                        </div>  
                </div>
                <div class="col">
                        <div class="card ">
                            <label for="" class="card-title text text-center"> 
                                <h2>@yield('opcion3')</h2>
                            </label>   
                            <a href="@yield('ruta3')" class="card-body center-block" style="display:block;margin:auto;">
                                <img src="@yield('img3')" alt="" class="img-fluid" style=" border-radius: 50%; width: 40vw">
                            </a>    
                        </div>  
                    </div>
            </div>
        </div>
    </div>
    <footer class="">
        Un&nformativa POR MODIFICAR AÑADIR LA OTRA INFO
    </footer>
    <script src="{{ asset('../public/js/app.js') }}"></script>
    <script src="{{ asset('../public/js/app-style-swicher.js') }}"></script>
    <script src="{{ asset('../public/js/custom.js') }}"></script>
    <script src="{{ asset('../public/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('../public/js/waves.js') }}"></script>
</body>
</html>

