@extends('../base')
@section('title') 
    Examenes 
@endsection
@section('modulo')
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
    @php
        $id=$examenes->idexamen;
    @endphp
    <div class="card mt-5" style="width: 43rem; position: relative; top: -1%; left: 10%;">
        <div class="card-body">
            <h2 class="card-title" style="position: relative; left: 30%">Actualizar Examen</h2>
            <div class="card-body">
                <form action="{{url('examen/'.$id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table">
                        <tr>
                            <td>
                                <label for="">Fecha de Examen:</label>
                            </td>
                            <td>
                                <input type="date" name="fecha" id="fecha" value="{{$examenes->fecha}}" class="form-text" style="border-radius: 5px; background-color:C4CFC9; width: 60%">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Costo de Examen:</label>
                            </td>
                            <td>
                                <input type="number" name="costo" id="costo" value="{{$examenes->costo}}" class="form-control" style="width: 60%">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Modificar Examen" name="btn_modificar_examen" id="btn_modificar_examen" class="btn btn-primary" style="position: relative; left: 80%">
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
        <a href="{{route('examen.index')}}"><br>Examenes</a>
    </li>
    <li class="active"><br><br>Actualizar Examenes</li>
@endsection