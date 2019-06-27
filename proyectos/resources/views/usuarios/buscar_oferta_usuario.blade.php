@extends('../base_usuario')
@section('title')
    Buscar   
@endsection
@section('Contenido')



{{-- <div class="container-fluid">
    <div class="row">
         <p> <div class="col"> <section>
                <p><h1>Buscar Oferta</h1></p>
                 <label for="">Elije Un Filtro</label>
                 <p>
                        <form action="">
                                <select class="btn btn-success" name="tipo" id="tipo">
                                        <option value="">Filtrar Busqueda</option>
                                        <option value="">Categoria</option>
                                        <option value="">Institucion</option>
                                        <option value="">Nombre</option>
                                </select>
                 </p>
               <p>
                    <table>
                            <tr>
                                <td>
                                    <input type="text" class="input-group-text" id="busqueda" placeholder="Buscar Oferta" autofocus>
                                </td>
                                <td>
                                    <button class="btn btn-secondary btn-lg" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
               </p> 
               <td>
                    @foreach ($ofertas as $oferta)
                            <div class="card" style="width: 25rem; height: 15rem">
                                    <div class="card-body">
                                      <h5 class="card-title"> <label for=""> Nombre: &nbsp;</label>{{$oferta->nombref}}</h5>
                                      <p class="card-text">
                                          <label for="">Categoria: </label> {{$oferta->nombrec}} <br>
                                          <label for="">Institucion: </label> {{$oferta->nombrei}} <br>
                                          <label for="">Descripcion: </label> {{$oferta->descripcion}}. <br>
                                          <label for="">Tiempo: </label> {{$oferta->duracion}}&nbsp;{{$oferta->medida}}
                                      </p>
                                    </div>
                                  </div> 
                    @endforeach   
                    </td>
                </form>
            </section>
        </div> </p>
    </div> 
        <div class="container-fluid"> --}}
            {{-- <table class="table table-light ">
                <tr>
                    <th>Nombre Oferta</th>
                    <th>Nombre Categoria</th>
                    <th>Nombre Institucion</th>
                    <th>Descripcion</th>
                    <th colspan="2">Tiempo</th>
                </tr>
                                @foreach ($ofertas as $oferta)
                                
                                <tr>
                                <td>{{$oferta->nombref}}</td>
                                <td>{{$oferta->nombrec}}</td>
                                <td>{{$oferta->nombrei}}</td>
                                <td>{{$oferta->descripcion}}.</td>
                                <td>{{$oferta->duracion}}&nbsp;</td>
                                <td>{{$oferta->medida}}</td>
                                </tr>  
                                @endforeach
                            
            </table>     --}}
        {{-- </div>
    </div>
</div>     --}}
<div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav" >
                <nav class="sidebar-nav" style="position: relative; top: 2%">
                    <ul id="sidebarnav">
                        <li><table>
                                <tr>
                                    <td>
                                        <input type="text" class="input-group-text" id="busqueda" placeholder="Buscar Oferta" autofocus>
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary btn-lg" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </td>
                                </tr>
                            </table></li>
                            <li>&nbsp;</li>
                            <li>
                                <form action="" method="get">
                                    <table>
                                        <tr>
                                            <td><input type="submit" value="Categoria" class="btn btn-primary"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('buscar/instituciones')}}">Institucion</a></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Duracion" class="btn btn-primary"></td>
                                        </tr>
                                    </table>
                                </form>
                            </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10">
                <table>
                    <tr>
                        <td colspan="4"><h1>Buscar Ofertas</h1></td>
                    </tr>
                    <tr>
                            <td>
                                    @foreach ($ofertas as $oferta)
                                            <div class="card" style="width: 25rem; height: 15rem">
                                                    <div class="card-body">
                                                        @php
                                                            $idoferta=$oferta->idoferta;
                                                        @endphp
                                                      <a href="{{url('oferta/'.$idoferta.'/mostrar')}}">{{$oferta->nombref}}</a>
                                                    </div>
                                                  </div> 
                                    @endforeach   
                                    </td>
                    </tr>
                </table>
                   
            </div>
        </div>
    </div>
@endsection