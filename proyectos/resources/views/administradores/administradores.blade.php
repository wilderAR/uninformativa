@extends('../base')
@section('title')
    Administrador
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
    &nbsp;
    USuarios
@endsection
@section('url3')
    {{route('institucion.index')}}
@endsection
@section('cont3')
    <i class="fas fa-school"></i> 
    &nbsp;    
    Instituciones
@endsection
@section('cont4')
   <i class="fas fa-user-tie"></i> 
    &nbsp;    
    Administradores
@endsection
@section('Contenido')
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i>
        Crear Administrador
    </button>         
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="position: relative; left: 35%">
                        <label for="">Crear Administrador</label>
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('CrearAdmin')}}" method="POST">
                        {{csrf_field()}}
                        <table class="table">
                            <tr>
                                <td>
                                    <label for="">Usuario:</label>
                                </td>
                                <td>
                                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Contraseña:</label>
                                </td>
                                <td>
                                    <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Confirmar Contraseña:</label>
                                </td>
                                <td>
                                    <input type="password"  name="password" id="password" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Correo:</label>
                                </td>
                                <td>
                                    <input type="text" name="correo" id="correo" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="position: relative; left: 75%">
                                    <input type="submit" value="Crear Administrador" name="btn_crear_usuario" id="btn_crear_usuario" class="btn btn-primary">
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
        <table class="table table-bordered" style="width: 75%">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Visión</th>
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
@section('migas')
    <li class="active"><br>Administradores</li>
@endsection