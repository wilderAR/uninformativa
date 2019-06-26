@extends('../base')
@section('title') 
    Examenes 
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i> 
        Crear Examen
    </button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="position: relative; left: 30%">
                        <label for="">Crear Examen</label>
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('examen')}}" method="POST">
                        {{csrf_field()}}
                        <table class="table">
                            <tr>
                                <td><label for="">Nombre Examen:</label></td>
                                <td><input type="text" name="nombrex" id="nombrex" class="form-control" style="border-radius:5%; width: 60%;" required></td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="">Fecha de Examen:</label>
                                </td>
                                <td>
                                    <input type="date" name="fecha" id="fecha" class="form-text" style="border-radius: 5px; background-color:C4CFC9; width: 60%" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Costo de Examen:</label>
                                </td>
                                <td>
                                    <input type="number" name="costo" id="costo" class="form-control" style="border-radius:5%; width: 60%;"  required placeholder="$0000.00">
                                </td>
                            </tr>
                            <tr>
                                <td style="position: relative; left: 70%">
                                    <input type="submit" value="Crear Examen" name="send" id="send" class="btn btn-primary">
                                </td>   
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p>
    <br>
    <section>
        <table class="table table-bordered">        
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Id de Examen</th>
                    <th class="text-center">Nombre Examen</th>
                    <th class="text-center">Fecha Examen</th>
                    <th class="text-center">Costo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Visión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($examenes as $examen)
                <tr>
                    <td class="text-center">{{$examen->idexamen}}</td>
                    @php
                        $id=$examen->idexamen;
                    @endphp
                    <td class="text center">{{$examen->nombrex}}</td>
                    <td class="text-center">{{$examen->fecha}}</td>
                    <td class="text-center">{{number_format($examen->costo,2)}}</td>
                    <td class="text-center">
                        @if ($examen->estado==1)
                            Activo
                        @else
                            Inactivo
                        @endif
                    </td>                    
                    <td class="text-center">
                        <a href="{{url('examen/'.$examen->idexamen.'/edit')}}">
                            <i class=" btn btn-secondary fas fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">   
                        @if ($examen->estado==1)
                            <form action="{{route('examen.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{route('examen.estado',$id)}}" method="POST">
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
    