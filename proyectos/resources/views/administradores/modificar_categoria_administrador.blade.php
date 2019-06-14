@extends('../base')
@section('title') Categorias @endsection
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
    <i class="fas fa-school"></i>&nbsp;
    Instituciones
@endsection
@section('Contenido')
@php
    $id=$categorias->idcategoria;
 @endphp
 <div class="card mt-5" style="width: 40rem; position: relative; top: -1%; left: 10%;">
    <div class="card-body">
            <h2 class="card-title" style="position: relative; left: 30%">Modificar Categoria</h2>
        <div class="card-body">
            <form action="{{url('categoria/'.$id)}}" method="POST">
                @method('PUT') 
                @csrf
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="nombrec" required class="form-control" id="nombrec" required value="{{$categorias->nombrec}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Descripcion:</td>
                        <td> <textarea name="descripcion" required id="descripcion" cols="60" rows="10" style="border-radius:5%;" required>{{$categorias->descripcion}}</textarea></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" required value="Modificar Categoria" name="btn_modificar_categoria" id="btn_modificar_categoria" style="position: relative; left: 80%">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection

