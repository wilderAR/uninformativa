@extends('../base')
@section('title') 
    Anuncios 
@endsection
@section('usuario') 
    Institución 
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
    @php
        $id=$anuncios->idanuncio;
    @endphp
    <div class="card mt-5" style="width: 57rem; position: relative; top: -1%; left: 5%;">
        <div class="card-body">
            <h2 class="card-title" style="position: relative; left: 35%">Modificar Anuncio</h2>
            <div class="card-body">
                <form action="{{url('anuncio/'.$id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <table class="table">
                        <tr>
                            <th>
                                <label for="">Imagen anuncio:</label>
                            </th>
                            <th>
                                <label for="">Fecha:</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid" src="{{ asset("imagenes/$anuncios->imagen")}}" alt="" width="200" style="border-radius:5%;">
                            </td>
                            <td>
                                <input type="date" name="fecha" id="fecha" value="{{$anuncios->fecha}}"  class="form-text" required style="border-radius: 5px; background-color:C4CFC9;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="" class="btn btn-success">
                                    <i class="fas fa-folder-open"></i>
                                    <input type="file" name="imagen" value="" id="imagen" class="" content="" style="border-radius: 5px; ">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Descripción:</label>
                            </td>
                            <td>
                                <textarea name="descripcion" id="descripcion" cols="60" rows="10" style="border-radius:5%;" required>{{$anuncios->descripcion}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Modificar Anuncio" class="btn btn-primary" style="position: relative; left: 80%">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection