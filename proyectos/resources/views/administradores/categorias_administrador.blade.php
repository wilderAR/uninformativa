@extends('../base')
@section('title')
    Categorias
@endsection
@section('modulo')
    Categorias
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
    Administradores
@endsection
@section('url3')
    {{route('institucion.index')}}
@endsection
@section('cont3')
    <i class="fas fa-school"></i> 
    &nbsp;    
    Instituciones
@endsection
@section('Contenido')
    <br>
    <button type="button" class="btn btnMenu" data-toggle="modal" data-target=".bd-example-modal-lg">
        <i class="fas fa-plus"></i>
        Crear Categoria
    </button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="position: relative; left: 40%">
                        <label for="">Crear Categoria</label>
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('categoria')}}" method="POST">
                        {{csrf_field()}}
                        <table class="table">
                            <tr>
                                <td>
                                    <label for="">Nombre:</label>
                                </td>
                                <td>
                                    <input type="text" name="nombre" id="nombre" class="form-control-lg" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Descripción:</label>
                                </td>
                                <td>
                                    <textarea cols="30" rows="10" id="descripcion" name="descripcion" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="position: relative; left: 80%">
                                    <input type="submit" value="Crear Categoria" class="btn btn-primary" name="btn_crear_categoria" id="btn_crear_categoria">
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
                    <th class="text-center">Nombre Categoría</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Actualizar</th>
                    <th class="text-center">Visión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoria as $categorias)
                <tr>
                    <td class="text-center">{{$categorias->idcategoria}}</td>
                    <td class="text-center">{{$categorias->nombrec}}</td>
                    <td>{{$categorias->descripcion}}</td>
                    <td class="text-center">
                        @if($categorias->estado==1)
                            Activo
                        @else
                            Desactivado
                        @endif
                    </td>
                    <td class="text-center"> 
                        @php 
                            $id=$categorias->idcategoria;
                        @endphp
                        <a href="{{url('categoria/'.$id.'/edit')}}">
                            <i class="fas fa-edit btn btn-secondary"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        @if ($categorias->estado==1)
                            <form action="{{route('categoria.estado',$id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger ">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{route('categoria.estado',$id)}}" method="POST">
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
    <li class="active"><br>Categorias</li>
@endsection
