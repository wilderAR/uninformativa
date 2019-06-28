@extends('base_usuario')
@section('title')
    inicio
@endsection
@section('buscar')
<div class="dropdown show btn btn-outline-dark text-white">
    {{-- <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> 
    </a> --}}
@endsection
@section('Contenido')
 <div class="container-fluid" style="margin-top: 10%; margin-left: 10%">
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