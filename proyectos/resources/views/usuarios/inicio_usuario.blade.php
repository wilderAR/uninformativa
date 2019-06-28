@extends('base_usuario')
@section('title')
    inicio
@endsection
@section('buscar')
{{-- <div class="dropdown show btn btn-outline-dark text-white"></div> --}}
    {{-- <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> 
    </a> --}}
@endsection
@section('Contenido')

<div class="container-fluid" style="margin-top: 3%; margin-left: 3%">
        <h1 class="">Buscar Ofertas</h1>    
        <table>
            <tr>
                <td>
                    <input type="text" class="input-group-text" id="busqueda" placeholder="Buscar Oferta">
                </td>
                <td>
                    <button class="btn btn-secondary btn-lg" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </td>
            </tr>
        </table>
        <table class="table table-bordered" style="width: 60%">    
            @foreach ($ofertas as $oferta)
            <tr>
                <td class="col">
                    @php $idoferta=$oferta->idoferta; @endphp
                    <a href="{{url('oferta/'.$idoferta.'/mostrar')}}">{{$oferta->nombref}}</a>
                </td>
            </tr>
            @endforeach   
        </table>

    <h1 class="text-center">Anuncios</h1>
    <div class="container">
        <div class="row">
            @foreach ($anuncios as $anuncio)
                <div class="col-sm-4">
                    <div class="card" style="width: 22rem; height: 30rem">
                        <img class="card-img-top" src="{{ asset("imagenes/$anuncio->imagen")}}" alt="imagen" height="300" width="200" >
                        <div class="card-body">
                            <h5 class="card-title">{{$anuncio->fecha}}</h5>
                            <p class="card-text">
                            <p>{{$anuncio->nombrei}}</p>
                            <p>{{$anuncio->descripcion}}</p>
                        </div>
                    </div>
                </div>
                &nbsp;
            @endforeach
        </div>
    </div>
@endsection