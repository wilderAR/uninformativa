@extends('../base_usuario')
@section('title')
    Ofertas
@endsection
@section('usuario')
    Usuario
@endsection
@section('home')
@endsection
@section('url1')
@endsection
@section('cont1')
    <i class="fas fa-search"></i>
    Buscar Ofertas
@endsection
@section('Contenido')
    <br>
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="button" value="Filtrar">
                    </td>
                    <td>
                        <input type="button" value="Buscar">
                    </td>
                    <td>
                        <input type="text" name="seccion_buscar_oferta" id="seccion_buscar_oferta">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="Categoria">
                    </td>
                    <td>
                        <input type="button" value="Duración">
                    </td>
                   <td>
                    <input type="button" value="Institución">
                </tr>
            </table>
        </form>
    </section>
    <br>
    <section>
        <table>
            <tr>
                <td>nombre de la oferta</td>
            </tr>
            <tr>
                <td>descripcion</td>
            </tr>
            <tr>
                <td>categoria</td>
            </tr>
            <tr>
                <td>Institucion</td>
            </tr>
            <tr>
                <td>duracion</td>
            </tr>
            <tr>
                <td>puntaje</td>
            </tr>
        </table>
    </section>
@endsection