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
    <div class="container">
        <div class="row-content">
            <div class=" col align-self-center">
                <div class="card" style="width: 30rem;display:block; margin: auto;">
                    <h2 class="card-title text text-center">Crear Usuario</h2>
                    <div class="card-body">
                        <form action="#" method="POST">
                            {{@csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>Usuario:</td>
                                    <td>
                                        <input type="text" name="usuario" id="usuario" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contraseña:</td>
                                    <td>
                                        <input type="password" name="contraseña" id="contraseña" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirmar Contraseña:</td>
                                    <td>
                                        <input type="password"  name="password" id="password" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Correo:</td>
                                    <td>
                                        <input type="text" name="correo" id="correo" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Crear Usuario" name="btn_crear_usuario" id="btn_crear_usuario" class="btn btn-success">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
