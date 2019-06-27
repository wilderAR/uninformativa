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
                                            <td><input type="submit" value="Categoria" class="btn btnMenu"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('buscar/instituciones')}}" class="btn btnMenu">Institucion</a></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Duracion" class="btn btnMenu"></td>
                                        </tr>
                                    </table>
                                </form>
                            </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10">
                    <h1 class="pl-5 pt-3">Buscar Ofertas</h1>

                <table class="table table-bordered">
                    <tr>
                                    @foreach ($ofertas as $oferta)
                                    <td class="col">
                                        @php $idoferta=$oferta->idoferta; @endphp
                                        <a href="{{url('oferta/'.$idoferta.'/mostrar')}}">{{$oferta->nombref}}</a>
                                    </td>
                                    @endforeach   
                    </tr>
                </table>
                   
            </div>
        </div>
    </div>
@endsection