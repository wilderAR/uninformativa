@extends('../base_usuario')
@section('title')
    Instituciones
@endsection
@section('Contenido')
  <br>
  <br>
  <div class="container">
    <div class="row">
      @foreach ($instituciones as $institucion)
      @php
        $idinstitucion=$institucion->idinstitucion;
      @endphp
      <div class="col-sm-4">
        <div class="card" style="width: 22rem; height: 30rem">
          <div class="card-img-top bg-dark text-white text-center py-5"> 
            <p class="display-7">{{$institucion->nombrei}}</p>
          </div>
          <div class="card-body">
            <h5 class="card-title">Presione el botón de Ingresar para ver mas datos de esta universidad.</h5>
            <hr>
            <label for="" class="h2">&nbsp;</label>
            <a href="{{url('buscar/instituciones/'.$idinstitucion)}}" class="btn btnMenuUni">Ingresar</a><br>
          </div>
        </div>
      </div>
      &nbsp;
      @endforeach
    </div>
  </div>
@endsection 