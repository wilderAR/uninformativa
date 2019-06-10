@extends('../base_inicio')
@section('title')Inicio @endsection
@section('ruta1')
{{route('usuarios.index')}}
@endsection
@section('opcion1')
    Usuarios
@endsection
@section('img1')
{!! asset('imagenes/images.jpg') !!}
@endsection
@section('ruta2')
{{route('categoria.index')}}
@endsection
@section('opcion2')
    Categorias
@endsection
@section('img2')
{!! asset('imagenes/categorias.jpg') !!}
@endsection

@section('ruta3')
{{route('institucion.index')}}
@endsection
@section('opcion3')
    Instuciones
@endsection
@section('img3')
{!! asset('imagenes/instituciones.jpg') !!}
@endsection
