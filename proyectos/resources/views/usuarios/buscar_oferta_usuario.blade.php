@extends('../base_usuario')
@section('title')
    Buscar   
@endsection
@section('Contenido')
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
                                            <td><a href="{{url('buscar/instituciones')}}">Institucion-</a></td>
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