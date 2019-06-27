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
            background-color: #f1f8e9;
            height: 550px

        }

        .sidenav {
            background-color: #212121;
            height: 100%;

        }

        .sidenav {
            background-color: #212121;
            height: 100%;
            box-shadow:5px 0px 2px 0px #757575;
        }
        
        @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        
        }

        .row.content {height: auto;}

        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-dark bg-dark">
                <span class="navbar-brand mb-0 h1">UN&NFORMATIVA</span>
                {{-- <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>{{auth->user()->usuario}} 
                </button>--}}
            </nav>
        </div>
    </div>
        @yield('Contenido')
    </div>
    <footer class="">
        Un&nformativa
    </footer>
    <script src="{{ asset('../public/js/app.js') }}"></script>
    <script src="{{ asset('../public/js/app-style-swicher.js') }}"></script>
    <script src="{{ asset('../public/js/custom.js') }}"></script>
    <script src="{{ asset('../public/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('../public/js/waves.js') }}"></script>
</body>
</html>

