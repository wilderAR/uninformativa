
@extends('../base')
@section('title')
    institucion
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
<div class="container">
    <div class="row-content">
        <div class=" col align-self-center">
                <div class="card" style="width: 30rem;display:block; margin: auto;">    
                                <h2 class="card-title text text-center">Crear institucion</h2>
                        <div class="card-body">
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
