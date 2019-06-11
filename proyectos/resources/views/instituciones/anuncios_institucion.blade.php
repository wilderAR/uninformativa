@extends('../base')
@section('title')
    Anuncios
@endsection
@section('usuario')
    <label for="" class="FONT-FAMILY-AWESOME"></label>
    Institucion
@endsection
@section('home')
    {{route('instituciones')}}
@endsection
@section('url1')
    {{route('examen.index')}}
@endsection
@section('cont1')
    <i class="fas fa-book-open"></i>
    Examenes
@endsection
@section('url2')
    {{route('anuncio.index')}}
@endsection
@section('cont2')
    <i class="fas fa-bullhorn"></i>
    Anuncios
@endsection
@section('url3')
    {{route('oferta.index')}}
@endsection
@section('cont3')
    <i class="fas fa-book"></i>
    Ofertas
@endsection
@section('Contenido')
    <br>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i>
        Crear Anuncio
    </button>
    <p>
    <br>
    <section>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                                    Crear Anuncio
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="{{route('anuncio.store')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <table class="table">
                                        <tr>
                                            <td><label for="">Fecha de Anuncio:</label></td>
                                            <td >
                                                <input type="date" name="fecha" id="fecha" class="form-text" required style="border-radius: 5px; background-color:C4CFC9;">
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><label for="">Imagen:</label></td>
                                            <td>
                                                <div>
                                                    <label for="" class="btn btn-success"><i class="fas fa-folder-open"></i><input type="file" name="imagen" value="" id="imagen" required class="" content="" style="border-radius: 5px; "></label>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="" class="form-check-label">Descipcion:</label></td>
                                            <td ><textarea class="" cols="60" rows="10" name="descripcion" id="descripcion" style="border-radius:5%;" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td style="position: relative; left: 80%">
                                                <input type="submit" value="Crear Anuncio" name="btn_crear_anuncio" id="btn_crear_anuncio" class="btn btn-success">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                        </div>
                    </div>
                </div>
              </div>
<p>
<section>
    <table class="table table-bordered">
        <thead class="thead-dark"><tr>
                <th scope="col text-center">#</th>
                <th scope="col text-center">Fecha de Anuncio</th>
                <th scope="col text-center">Imagen</th>
                <th scope="col text-center" colspan="autofocus">Descripción</th>
                <th scope="col text-center">Estado</th>
                <th scope="col text-center">Modificar</th>
                <th scope="col text-center">Vision</th>
                <th></th>
            </tr></thead>
        <tbody>
                @foreach ($anuncios as $anuncio)
                <tr>
                    <td class="text-center"scope="COL">{{$anuncio->idanuncio}}</td>
                    <td class="text-center">{{$anuncio->fecha}}</td>
                    <td colspan="autofocus"><img src="{{ asset("imagenes/$anuncio->imagen")}}" alt="" width="80"></td>
                    <td colspan="autofocus">{{$anuncio->descripcion}}</td>
                    <td class="text-center">@if ($anuncio->estado==1) Activo @else Inactivo @endif</td>
                    @php
                      $id=$anuncio->idanuncio;
                    @endphp

                <td class="text-center"><a href="{{url('anuncio/'.$id.'/edit')}}"><i class="fas fa-edit btn btn-secondary"></i></a></td>

                    <td>   @if ($anuncio->estado==1)
                            <form action="{{route('anuncio.estado',$id)}}" method="POST">
                               @csrf
                               <button type="submit" class="btn btn-danger"><i class="fas fa-eye-slash"></i></button>
                           </form>
                       @else
                           <form action="{{route('anuncio.estado',$id)}}" method="POST">

                               @csrf
                               <button type="submit" class="btn btn-success "><i class="far fa-eye"></i></button>
                           </form>
                       @endif
                    </td>

                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
