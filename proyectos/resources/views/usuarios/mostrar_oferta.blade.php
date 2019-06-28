@extends('base_usuario')
@section('title')
    {{$ofertas->nombref}}
@endsection
@section('Contenido')

<div class="row">
        <div class="col-sm-12">
          <div class="card cardUni">
          <div class="card-img-top bg-dark text-white text-center py-5"> <p class="display-7"></p>{{$ofertas->nombref}}</div>
            <div class="card-body">
              <hr>
              <div class="card-text">
                  <label for="">Categoria:</label>&nbsp;
                  <label for="">{{$ofertas->nombrec}}</label><br>

                  <label for="">Institucion:</label>&nbsp;
                  <label for="">{{$ofertas->nombrei}}</label><br>
                  <label for="">Duracion:</label>&nbsp;
                  <label for="">{{$ofertas->duracion}}&nbsp;{{$ofertas->medida}}</label><br>
                  <label for="">Descripcion:</label>&nbsp;
                  <label for="">{{$ofertas->descripcion}}</label>                  
              </div>
            </li><br>
            </div>
          </div>
        </div>
      </div>

@endsection
