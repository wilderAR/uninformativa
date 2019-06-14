@extends('../base')
@section('title')
    Usuarios
@endsection
@section('usuario')
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
    <i class="fas fa-school"></i> &nbsp;    
    Instituciones
@endsection
@section('Contenido')
    <br>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i>
        Crear Usuario
    </button>         
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                                Crear Usuario
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{url('usuarios')}}" method="POST">
                        {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>Usuario:</td>
                                    <td>
                                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contraseña:</td>
                                    <td>
                                        <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirmar Contraseña:</td>
                                    <td>
                                        <input type="password"  name="password" id="password" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Correo:</td>
                                    <td>
                                        <input type="text" name="correo" id="correo" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Crear Institucion" name="btn_crear_usuario" id="btn_crear_usuario" class="btn btn-success">
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
        <table class="table  table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">correo</th>
                    <th class="text-center">Estado</th>
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
                    @php
                    $id=$usuario->idusuario;
                @endphp
                    <td class="text-center">
                        @if ($usuario->estado==1)
                            <form action="{{route('usuario.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger ">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{route('usuario.estado',$id)}}" method="POST">
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
