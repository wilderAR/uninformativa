@extends('../base')
@section('title') Examenes @endsection
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
<div class="card mt-5" style="width: 21rem; display:block; position: absolute; top:15vh; left:50vh;">
        <div class="card-body">
                <h2 class="card-title">Crear Un Examen</h2>
            <div class="card-title">
                    <form action="#" method="POST" >
                            {{csrf_field()}}
                           
                            <table>
                                <tr>
                                    <td> <label for="">Fecha de Examen:</label></td>
                                    <td>
                                        <input type="date" name="fecha" id="fecha" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for=""> Costo de Examen:</label>
                                       
                                    </td>
                                    <td>
                                        <input type="number" name="costo" id="costo"  class="form-control" style="border-radius:5%;" required placeholder="$0000.00">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="Crear Examen" name="send" id="send"  class="btn btn-success"  style="position: relative; border-radius:5%; left: 60%">
                                    </td>
                                </tr>
                            </table>
                        </form>
            </div>
        </div>
    </div>
@endsection