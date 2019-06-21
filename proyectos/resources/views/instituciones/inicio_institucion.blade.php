@extends('../base_inicio')
@section('title')
    Inicio 
@endsection
@section('ruta1')
    {{route('anuncio.index')}}
@endsection
@section('opcion1')
    Anuncios
@endsection
@section('img1')
    {!! asset('imagenes/anuncios1.jpg') !!}
@endsection
@section('ruta2')
    {{route('oferta.index')}}
@endsection
@section('opcion2')
    Ofertas
@endsection
@section('img2')
    {!! asset('imagenes/oferta.jpg') !!}
@endsection
@section('ruta3')
    {{route('examen.index')}}
@endsection
@section('opcion3')
    Examenes
@endsection
@section('img3')
    {!! asset('imagenes/examen1.jpg') !!}
@endsection
