@extends('../base_usuario')
@section('title')
    Instituciones
@endsection
@section('Contenido')
<div class="container-fluid">
  @foreach ($instituciones as $institucion)
  @php
  $idinstitucion=$institucion->idinstitucion;
  @endphp
  <div class="row">
    <div class="col-sm-12">
      <div class="card cardUni">
      <div class="card-img-top bg-dark text-white text-center py-5"> <p class="display-7">{{$institucion->nombrei}}</p></div>
        <div class="card-body">
          <h5 class="card-title">Presione el botón de Ingresar para ver mas datos de esta universidad.</h5>
          <hr>
          <label for="" class="h2">&nbsp;</label><a
        href="{{url('buscar/instituciones/'.$idinstitucion)}}" class="btn btnMenuUni">Ingresar</a></li><br>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection