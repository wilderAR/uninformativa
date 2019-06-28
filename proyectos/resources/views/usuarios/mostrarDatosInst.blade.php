@extends('../base_usuario')
@section('title')
    Datos Universidad
@endsection
@section('Contenido')

<section>

        <label for="" class="h2"><strong>{{$instituciones->nombrei}}</strong></label><br>
        <label for="" class="h3"><strong>Pagina Web Institucional: &nbsp;</strong> </label><label for="" class="h4"> {{$instituciones->pagina}}</label>

</section>
<br>
<section>
        <table class="table table-bordered" style="width: 60%">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Categoria</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Duracion</th>
                        <th class="text-center">Medida</th>
                        <th class="text-center">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <h2 class="">Ofertas Institucion</h2>
                    @foreach ($ofertas as $oferta)
                    <tr>
                        <td class="text-center">{{$oferta->nombrec}}</td>
                        <td class="text-center">{{$oferta->nombref}}</td>
                        <td class="text-center">{{$oferta->duracion}}</td>
                        <td class="text-center">{{$oferta->medida}}</td>
                        <td>{{$oferta->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</section>
<section>
        <table class="table table-bordered">        
            <thead class="thead-dark">
                <tr>

                    <th class="text-center">Nombre Examen</th>
                    <th class="text-center">Fecha Examen</th>
                    <th class="text-center">Costo</th>
                </tr>
            </thead>
            <tbody>
                <h2>Examenes de Institucion</h2>
                @foreach ($examenes as $examen)
                <tr>
                    <td class="text center">{{$examen->nombrex}}</td>
                    <td class="text-center">{{$examen->fecha}}</td>
                    <td class="text-center">{{number_format($examen->costo,2)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>


@endsection