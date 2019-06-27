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
    <br>
    <button type="button" class="btn btnMenu" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i> 
        Crear Oferta
    </button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="position: relative; left: 40%">
                        <label for="">Crear Oferta</label>
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('oferta.store')}}" method="POST">
                        {{ csrf_field()}}
                        <table class="table">
                            <tr>
                                <td>
                                    <label for="">Categoria:</label>
                                </td>
                                <td>
                                        <select name="idcategoria" id="idcategoria" class="btn btn-primary">
                                        <option value="0">Seleccione una Categoria</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->idcategoria}}">{{$categoria->nombrec}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Nombre:</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="nombref" id="nombref" style="width: 40%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Cantidad:</label>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="duracion" id="duracion" style="width: 40%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Medida:</label>
                                </td>
                                <td>
                                    <select class="btn btn-primary" name="medida" id="medida">
                                        <option value="Años">Años</option>
                                        <option value="Semestres">Semestres</option>
                                        <option value="Trimestres">Trimestres</option>
                                        <option value="Meses">Meses</option>
                                        <option value="Días">Días</option>
                                        <option value="Horas">Horas</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Descripción:</label>
                                </td>
                                <td>
                                    <textarea class="form-control" cols="60" rows="10" name="descripcion" id="descripcion" style="width: 40vw" ></textarea>
                                </td>     
                            </tr>
                            <tr>
                                <td colspan="2"> 
                                    <input type="submit" value="Crear Oferta" name="send" id="btn_crear_oferta" class="btn btn-primary" style="position: relative; left: 85%" >
                                </td>
                            </tr>
                        </table>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <p>
    {{-- <form action="" method="post">
        <table>
            <tr>
                <td>
                    <input type="text" class="input-group-text" id="busqueda" placeholder="Buscar Oferta" autofocus>
                </td>
                <td>
                    <button class="btn btn-secondary btn-lg" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </td>
            </tr>
        </table>
    </form> --}}
    <p>
    <br>
    <section>
        <table class="table table-bordered " style="width: 75%">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Duracion</th>
                    <th class="text-center">Medida</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Actualizar</th>
                    <th class="text-center">Visión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ofertas as $oferta)
                <tr>
                    <td class="text-center">{{$oferta->idoferta}}</td>
                    <td class="text-center">{{$oferta->nombrec}}</td>
                    <td class="text-center">{{$oferta->nombref}}</td>
                    <td class="text-center">{{$oferta->duracion}}</td>
                    <td class="text-center">{{$oferta->medida}}</td>
                    <td>{{$oferta->descripcion}}</td>
                    <td class="text-center">
                        @if($oferta->estado==1) 
                            Activo 
                        @else 
                            Inactivo 
                        @endif
                    </td>
                    <td class="text-center">
                        @php
                            $id=$oferta->idoferta;
                        @endphp
                        <a href="{{url('oferta/'.$id.'/edit')}}">
                            <i class=" btn btn-secondary fas fa-edit"></i>
                        </a>
                    </td>
                    <td>   
                        @if ($oferta->estado==1)
                            <form action="{{route('oferta.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{route('oferta.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <i class="far fa-eye"></i>
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
@section('migas')
    <li class="active"><br>Ofertas</li>
@endsection