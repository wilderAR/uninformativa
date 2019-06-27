@extends('base_usuario')
@section('title')
    {{$ofertas->nombref}}
@endsection
@section('Contenido')
<table>
    <tr>
        <td><label for="">Categoria:</label></td>
        <td><label for="">{{$ofertas->nombrec}}</td>
    </tr>
    <tr>
        <td>Institucion</td>
        <td>{{$ofertas->nombrei}}</td>
    </tr>
    <tr>
        <td>Oferta:</td>
        <td>{{$ofertas->nombref}}</td>
    </tr>
    <tr>
        <td>Descripcion:</td>
        <td>{{$ofertas->descripcion}}</td>
    </tr>
    <tr>
        <td>Duracion</td>
        <td>{{$ofertas->duracion}}&nbsp;{{$ofertas->medida}}</td>
    </tr>
</table>

@endsection
