@extends('../base')
@section('title')
    Ofertas
@endsection
@section('modulo')
    Ofertas
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
        $id=$ofertas->idoferta;
    @endphp
    <div class="card mt-5" style="width: 50rem; position: relative; top: -1%; left: 10%;">
        <div class="card-body">
            <h2 class="card-title" style="position: relative; left: 35%">Actualizar Oferta</h2>
            <div class="card-body">
                <form action="{{url('oferta/'.$id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table">
                        <tr>
                            <td>
                                <label for="">Categoria:</label>
                            </td>
                            <td>
                                <select name="idcategoria" id="idcategoria" class="btn btn-primary">
                                    <option value="0">Selecciones una Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->idcategoria}}">{{$categoria->nombrec}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Duración:</label>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="number" name="duracion" id="duracion" class="form-control" value="{{$ofertas->duracion}}">
                                        </td>
                                        <td> 
                                            <select name="medida" id="medida" class="btn btn-primary">
                                                <option value="Años">Años</option>
                                                <option value="Semestre">Semestres</option>
                                                <option value="Trimestre">Trimestres</option>
                                                <option value="Meses">Meses</option>
                                                <option value="Dias">Días</option>
                                                <option value="Hora">Horas</option>
                                            </select>    
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Medida:</label>
                            </td>
                            <td>
                                <input type="text" name="puntaje" id="puntaje" class="form-control" value="{{$ofertas->medida}}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Nombre:</label>
                            </td>
                            <td>
                                <input type="text" name="nombref" id="nombref" class="form-control" value="{{$ofertas->nombref}}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Descripción:</label>
                            </td>
                            <td>
                                <textarea name="descripcion" id="descripcion" cols="50" rows="5" class="form-control" style="width: 40vw">{{$ofertas->descripcion}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="position: relative; left: 60%">
                                <input type="submit" value="Actualizar Oferta" name="btn_modificar_oferta" id="btn_modificar_oferta" class="btn btn-primary" style="position: relative; left: 90%;">
                            </td>
                        </tr>
                    </table>
                </form>            
            </div>
        </div>
    </div>
@endsection
@section('migas')
    <li>
        <a href="{{route('oferta.index')}}"><br>Ofertas</a>
    </li>
<li class="active"><br><br>Actualizar Ofertas</li>
@endsection