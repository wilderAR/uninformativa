@extends('../base_usuario')
@section('title')
    Buscar   
@endsection
@section('Contenido')
<h1 class="pl-5 pt-3">Buscar Ofertas</h1>

<table class="table table-bordered">
    
                    @foreach ($ofertas as $oferta)
                    <tr>
                    <td class="col">
                        @php $idoferta=$oferta->idoferta; @endphp
                        <a href="{{url('oferta/'.$idoferta.'/mostrar')}}">{{$oferta->nombref}}</a>
                    </td>
                </tr>
                    @endforeach   
    
</table>
@endsection