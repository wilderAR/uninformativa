@extends('../base')
@section('title')Oferta @endsection
@section('usuario') <label for="" class="FONT-FAMILY-AWESOME"></label> Institucion @endsection
@section('home')
{{route('instituciones')}}
@endsection
@section('url1'){{route('examen.index')}} @endsection
@section('cont1') <i class="fas fa-book-open"></i> Examenes @endsection
@section('url2'){{route('anuncio.index')}} @endsection
@section('cont2') <i class="fas fa-bullhorn"></i> Anuncios @endsection
@section('url3'){{route('oferta.index')}} @endsection
@section('cont3')<i class="fas fa-book"></i> Ofertas @endsection

    @section('Contenido')
    <div class="card mt-5" style="width: 50rem; position: relative; top: -1%; left: 15%;">
            <div class="card-body">
              <h5 class="card-title ml-5" style="position: relative; left: 35%;">Modificar Oferta</h5>
              <div class="card-body">
                    @php
                    $id=$ofertas->idoferta;
                @endphp
            <form action="{{url('oferta/'.$id)}}" method="POST">
                     @method('PUT')
                     @csrf
                <table class="table">
                    <tr>
                            <td>Categoria:</td>
                            <td>
                            <select name="idcategoria" id="idcategoria" class="btn btn-success">
                                <option value="0">Selecciones una Categoria</option>
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->idcategoria}}">{{$categoria->nombrec}}</option>
                                @endforeach
                            </select>
                            </td>
                    </tr>
                    <tr>
                        <td>Duración:</td>
                        <td>
                        <input type="number" name="duracion" id="duracion" class="form-control" value="{{$ofertas->duracion}}">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        Selecccione Nueva opcion
                    </td>
                        <td> <select name="medida" id="medida" class="btn btn-success">
                            <option value="Años">Años</option>
                            <option value="Meses">Meses</option>
                            <option value="Dias">Días</option>
                            <option value="Trimestre">Trimestres</option>
                            <option value="Semestre">Semestres</option>
                          </select>    
                    </td>   
                    </tr>
                    <tr>
                        <td>Medida:</td>
                        <td>
                        <input type="text" name="puntaje" id="puntaje" class="form-control" value="{{$ofertas->medida}}" >
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                        <input type="text" name="nombref" id="nombref" class="form-control" value="{{$ofertas->nombref}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Descripcion:
                        </td>
                        <td>
                            <textarea name="descripcion" id="descripcion" cols="50" rows="5" class="form-control" style="width: 40vw">{{$ofertas->descripcion}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Actualizar" name="btn_modificar_oferta" id="btn_modificar_oferta" class="btn btn-success" style="position: relative; left: 90%;">
                        </td>
                    </tr>
                </table>
            </form>            
          </div>
            </div>
    @endsection


  