@php
    $id=$instituciones->idinstitucion;
@endphp
<form action="#" method="POST">
    @method('PUT')
    @csrf
    <h2>Modificar Institución</h2>
    <table>
        <tr>
            <td>Nombre Institucional:</td>
            <td>
                <input type="text" name="nombrei" id="nombrei" value="{{$instituciones->nombrei}}">
            </td>
        </tr>
        <tr>
        
        </tr>
        <tr>
            <td>Pagina Principal:</td>
            <td>
                <input type="text" name="pagina" id="pagina" value="{{$instituciones->pagina}}">
            </td>
        </tr>
        <tr>
            <td>Dirección Institucional:</td>
            <td>
                <input type="text" name="direccion" id="direccion" value="{{$instituciones->direccion}}">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Modificar Institucion" name="btn_modificar_institucion" id="btn_modificar_institucion">
            </td>
        </tr>
    </table>
</form>
