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
     &nbsp; Instituciones
@endsection
@section('Contenido')
    <br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
            <i class="fas fa-plus"></i>
            Crear Institucion
        </button>         
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                                    Crear institucion
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{url('institucion')}}" method="POST">
                            {{csrf_field()}}
                                <table class="table">
                                    <tr>
                                        <td>Usuario:</td>
                                        <td>
                                            <input type="text" name="usuario" id="usuario" required class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contraseña:</td>
                                        <td>
                                            <input type="password" required name="contraseña" id="contraseña" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Confirmar Contraseña:</td>
                                        <td>
                                            <input type="password" required name="password" id="password" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Correo:</td>
                                        <td>
                                            <input type="text" name="correo" required id="correo" class="form-control">
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
                        @php
                            $id=$institucion->idusuario;
                        @endphp
                    

                          <td>   @if ($institucion->estado==1)
                                  <form action="{{route('institucion.estado',$id)}}" method="POST">
                                     @csrf
                                     <button type="submit" class="btn btn-danger"><i class="fas fa-eye-slash"></i></button>
                                 </form>
                             @else
                                 <form action="{{route('institucion.estado',$id)}}" method="POST">
      
                                     @csrf
                                     <button type="submit" class="btn btn-success "><i class="far fa-eye"></i></button>
                                 </form>
                             @endif
                          </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection