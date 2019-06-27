@extends('../base_usuario')
@section('Contenido')
 <table>
    @foreach ($instituciones as $institucion)
    @php
        $idinstitucion=$institucion->idinstitucion;
    @endphp
      <tr> <td class="btn"> <label for="" class="h2">{{$institucion->nombrei}}&nbsp;</label><a href="{{url('buscar/instituciones/'.$idinstitucion)}}" class="h2 "><i class="fas fa-file-alt"></i></a></li><br>
    @endforeach
  </table>
@endsection