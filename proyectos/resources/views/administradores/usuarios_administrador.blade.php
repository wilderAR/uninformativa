@extends('../base')
@section('title')
    Usuarios
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
    <a href="{{route('usuarios.create')}}" class="btn btn-dark btn-lg">
        <i class="fas fa-plus"></i>
        Crear Usuario
    </a>
    <p>
    <br>
    <section>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">correo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Vision</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td class="text-center">{{$usuario->idusuario}}</td>
                    <td class="text-center">{{$usuario->usuario}}</td>
                    <td class="text-center">{{$usuario->correo}}</td>
                    <td class="text-center">
                        @if ($usuario->estado==1)
                            Activo
                        @else
                            Desactivado
                        @endif
                    </td>
                    <td class="text-center">
                        @php
                            $id=$usuario->idusuario;
                        @endphp
                        <a href="{{url('usuario/'.$id.'/edit')}}" class="btn btn-success">Modificar</a>
                    </td>
                    <td class="text-center">
                        @if ($usuario->estado==1)
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
