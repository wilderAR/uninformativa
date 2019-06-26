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
                      {{-- <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="caret"></span>
                                </a>      

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest 
                        </ul>--}}
        </div>
        <div class="container">
            <div class="row justify-content-start">
                    <div class="card" style="width: 18rem;">
                            <img src="@yield('img1')" alt="" class="img-fluid" width="" style=" border-radius: 50%">
                            <div class="card-body">
                              <h5 class="card-title text text-center">@yield('opcion1')</h5>
                              <p class="card-text">@yield('descripcion1')</p>
                            </div>
                          </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br>
                    <div class="card ">
                        <label for="" class="card-title text text-center"> 
                            <h2></h2>
                        </label>   
                        <a href="@yield('ruta1')" class="card-body center-block" style="display:block;margin:auto;">
                            <img src="@yield('img1')" alt="" class="img-fluid" style=" border-radius: 50%">
                        </a> 
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-4">
                    <br>
                    <div class="card ">
                        <label for="" class="card-title text text-center"> 
                            <h2>@yield('opcion2')</h2>
                        </label>   
                        <a href="@yield('ruta2')" class="card-body center-block" style="display:block;margin:auto;">
                            <img src="@yield('img2')" alt="" class="img-fluid" style=" border-radius: 50%;">
                        </a> 
                    </div>  
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br>
                    <div class="card ">
                        <label for="" class="card-title text text-center"> 
                            <h2>@yield('opcion3')</h2>
                        </label>   
                        <a href="@yield('ruta3')" class="card-body center-block" style="display:block;margin:auto;">
                            <img src="@yield('img3')" alt="" class="img-fluid" style=" border-radius: 50%">
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

