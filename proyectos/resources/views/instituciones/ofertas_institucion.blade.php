{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ofertas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<nav class="navbar navbar-lg navbar-light bg-light">

  <h3><font face="Comic Sans MS,Arial,Verdana " color="green">UN&NFORMATIVA</font></h3>

 <td>
     <a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
         <span class="glyphicon glyphicon-user"></span>Perfil
     </a>
</td>

 <td>
     <a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
         <span class="glyphicon glyphicon-user"></span>Examenes
     </a>
</td>

 <td>
     <a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
         <span class="glyphicon glyphicon-user"></span>anuncios
     </a>
</td>

 <td>   
     <a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
         <span class="glyphicon glyphicon-user"></span>Configuración
     </a>
</td>

 <td>
     <a href="#" class="border border-success text-success btn btn-outline-warning btn-lg">
         <span class="glyphicon glyphicon-user"></span>Cerrar Sesión
     </a>
     oferta
     <i class="fas fa-book"></i>
     icono examen
     <i class="fas fa-book-open">
     icono anuncio
     <i class="fas fa-bullhorn"></i>
     busqueda
     <i class="fas fa-search"></i>
     institucion
     <i class="fas fa-school"></i>
     usuarios
     <i class="fas fa-users"></i>
     usuario
     <i class="fas fa-user-alt"></i>
     editar
     <i class="fas fa-edit"></i>
     configuracion user
     <i class="fas fa-user-cog"></i>
     perfil
     <i class="fas fa-user-circle"></i>
     regresar
     <i class="fas fa-arrow-left"></i>
     categoria
     <i class="fas fa-bookmark"></i>
     engranajes
     <i class="fas fa-cogs"></i>
     activado
    <i class="fas fa-eye"></i>
     desactivado
     <i class="fas fa-eye-slash"></i>
     cerrar sesion
     <i class="fas fa-sign-out-alt"></i>

</td> --}}
<style>
.awesome{
    font-family: 'Times New Roman', Times, serif
}
</style>
@extends('../base')
@section('title')Oferta @endsection
@section('usuario') <label for="" class="FONT-FAMILY-AWESOME"></label> Institucion @endsection
@section('home')
{{route('instituciones')}}
@endsection
@section('url1'){{route('examen.index')}} @endsection
@section('cont1') <i class="fas fa-book-open"></i> Examenes @endsection
@section('url2'){{route('anuncio.index')}} @endsection
@section('cont2') <i class="fas fa-bullhorn"></i> Anuncios @endsection
@section('url3'){{route('oferta.index')}} @endsection
@section('cont3')<i class="fas fa-book"></i> Ofertas @endsection

    @section('Contenido')
    <br>
    <section>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="fas fa-plus"></i> 
                    Crear Ofertas
                </button>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" style="position: relative; left: 40%">
                                    Crear Oferta
                                </h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{route('oferta.store')}}" method="POST">
                                            {{ csrf_field()}}
                                              <table class="table">
                                                  <tr>
                                                      <td><label for="">Categoria:</label></td>
                                                      <td  class="" >
                                                      <select name="idcategoria" id="idcategoria" class="btn btn-success">
                                                          <option value="0">Selecciones una Categoria</option>
                                                          @foreach ($categorias as $categoria)
                                                          <option value="{{$categoria->idcategoria}}">{{$categoria->nombrec}}</option>
                                                          @endforeach
                                                      </select></td>
                                                  </tr>
                                                  <tr>
                                                          <td><label for="">Nombre:</label></td>
                                                          <td ><input type="text" class="form-control" name="nombref" id="nombref" style="width: 40%"></td>
                                                  </tr>
                                                  <tr>
                                                          <td  ><label for=""></label>Cantidad:</td>
                                                          <td >
                                                              <input type="number" class="form-control" name="duracion" id="duracion" style="width: 40%">
                                                          </td>
                                                  </tr>
                                                  <tr>
                                                        <td><label for="">Medida:</label></td>
                                                        <td><select class="btn btn-success" name="medida" id="medida">
                                                          <option value="AÑOS">Años</option>
                                                          <option value="MESES">Meses</option>
                                                          <option value="DIAS">Días</option>
                                                          <option value="TRIMESTRE">Trimestres</option>
                                                          <option value="SEMESTRE">Semestres</option>
                                                          <option value="HORA"></option>
                                                        </select>
                                                       </td>
                                                  </tr>
                                                  <td>
                                                          <label for="">Descripcion:</label>
                                                  </td>
                                            <td ><textarea class="form-control" cols="60" rows="10" name="descripcion" id="descripcion" style="width: 40vw" ></textarea></td>     
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" value="Crear Oferta" name="send" id="btn_crear_oferta" class="btn btn-success" style="position: relative; left: 85%" >
                                            </td>
                                        </tr>
                                    </table>
                                </form> 
                            </div>
                        </div>
                    </div>
                  </div>
    <form action="" method="post">
        <table>
            <br>
            <tr>
                <td><input type="text" class="input-group-text" id="busqueda" placeholder="Buscar Oferta" autofocus></td>
                <td><button class="btn btn-secondary btn-lg" type="submit"><i class="fas fa-search"></i></button></td>
            </tr>
        </table>
    </form>
    
        <table class="table table-bordered">
                <thead class="thead-dark">
                        <tr>
                          <th scope="col text-center">#</th>
                          <th scope="col text-center">Categoria</th>
                          <th scope="col text-center">Nombre</th>
                          <th scope="col text-center">Duracion</th>
                          <th scope="col text-center">Medida</th>
                          <th scope="col text-center" colspan="autofocus">Descripcion</th>
                          <th scope="col text-center">Estado</th>
                          <th scope="col text-center">Modificar</th>
                          <th scope="col text-center">Vision</th>
                        </tr>
                      </thead>
 <tbody>
        @foreach ($ofertas as $oferta)
        <tr>
            <td class="text-center " scope="COL">{{$oferta->idoferta}}</td>
            <td class="text-center">{{$oferta->nombrec}}</td>
            <td class="text-center">{{$oferta->nombref}}</td>
            <td class="text-center">{{$oferta->duracion}}</td>
            <td class="text-center">{{$oferta->medida}}</td>
            <td class="" colspan="autofocus">{{$oferta->descripcion}}</td>
            
            <td class="text-center">

                @if($oferta->estado==1) Activo @else Inactivo @endif
            </td>
        <td>
            @php
                $id=$oferta->idoferta;
            @endphp
        <a href="{{url('oferta/'.$id.'/edit')}}"><i class=" btn btn-secondary fas fa-edit"></i></a>
        </td>
            <td>   @if ($oferta->estado==1)
                <form action="{{route('oferta.estado',$id)}}" method="POST">
                   @csrf
                   <button type="submit" class="btn btn-danger "><i class="fas fa-eye-slash"></i></button>
               </form>
           @else
               <form action="{{route('oferta.estado',$id)}}" method="POST">

                   @csrf
                   <button type="submit" class="btn btn-success "><i class="far fa-eye"></i></button>
               </form>
           @endif
        </td>
        </tr>
        @endforeach
 </tbody>
          
        </table>
    </section>
    @endsection
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

