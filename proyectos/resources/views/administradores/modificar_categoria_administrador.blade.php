@php
    $id=$categorias->idcategoria;
@endphp
<form action="#" method="POST">
    @method('PUT')
    @csrf
        <h2>Modificar Categoria</h2>
        <table>
            <tr>
                <td>Nombre:</td>
                <td>
                <input type="text" name="nombrec" id="nombrec" value="{{$categorias->nombrec}}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Modificar Categoria" name="btn_modificar_categoria" id="btn_modificar_categoria">
                </td>
            </tr>
        </table>
</form>
