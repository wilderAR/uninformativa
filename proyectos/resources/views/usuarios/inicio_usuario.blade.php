@extends('base_usuario')
@section('title')
    inicio
@endsection
@section('buscar')
<div class="dropdown show btn btn-outline-dark text-white">
    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> 
        {{auth()->user()->correo}}
    </a>
  
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>{{ __('Cerrar Sesion') }}</a>
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
      <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Configuracion</a>
        <a class="dropdown-item" href="{{url('/buscar')}}"><i class="fas fa-search"></i> Buscar</a>
    </div>
  </div>
@endsection
@section('Contenido')
 <div class="container-fluid" style="margin-top: 10%; margin-left: 10%">
    <table>
        <tr>
            <td colspan="6"><h2 class="text-center ">Anuncios</h2></td>
        </tr>
        <tr>
                @foreach ($anuncios as $anuncio)
                <td>
                        <div class="card" style="width: 20rem; height: 30rem">
                                <img class="card-img-top" src="{{ asset("imagenes/$anuncio->imagen")}}" alt="imagen" height="300" width="200" >
                                <div class="card-body">
                                <h5 class="card-title">{{$anuncio->fecha}}</h5>
                                  <p class="card-text">
                                  <p>{{$anuncio->nombrei}}</p>
                                      {{$anuncio->descripcion}}</p>
                                </div>
                              </div>
                </td>
                <td>&nbsp;</td>
                 @endforeach
        </tr>
    </table>
 </div>
@endsection