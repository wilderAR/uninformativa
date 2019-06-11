@extends('../base')
@section('title')
    Instituciones
@endsection
@section('usuario')
    <label for=""></label>
    Administrador
@endsection
@section('home')
    {{route('administrador')}}
@endsection
@section('url1')
    {{route('categoria.index')}}
@endsection
@section('cont1')
    <i class="fas fa-bookmark"></i>
    Categorias
@endsection
@section('url2')
    {{route('usuarios.index')}}
@endsection
@section('cont2')
    <i class="fas fa-users"></i>
    Usuarios
@endsection
@section('url3')
    {{route('institucion.index')}}
@endsection
@section('cont3')
    <i class="fas fa-school"></i>
    Instituciones
@endsection
@section('Contenido')
    <br>
    <a href="{{route('institucion.create')}}" class="btn btn-dark btn-lg">
        <i class="fas fa-plus"></i>
        Crear Institucion
    </a>
    <p>
    <br>
    <section>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Usuario Institucion</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Vision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instituciones as $institucion)
                <tr>
                    <td class="text-center">{{$institucion->idusuario}}</td>
                    <td class="text-center">{{$institucion->usuario}}</td>
                    <td class="text-center">{{$institucion->correo}}</td>
                    <td class="text-center">
                        @if($institucion->estado)
                            Activo
                        @else
                            Desactivado
                        @endif
                    </td>
                    <td class="text-center">
                        @php
                            $id=$institucion->idusuario;
                        @endphp
                        <a href="#" class="btn btn-success">Modificar</a>
                    </td>
                    <td class="text-center">
                        @if ($institucion->estado==1)
                            <form action="{{route('oferta.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger ">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{route('oferta.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success ">
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
