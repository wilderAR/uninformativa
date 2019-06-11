@php
    $id=$usuarios->idusuario;
@endphp
<form action="poner direccion" method="POST">
    @method('PUT')
    @csrf
    <h2>Modificar Usuario</h2>
    <table>
        <tr>
            <td>Usuario:</td>
            <td>
                <input type="text" name="usuario" id="usuario" value="{{$usuarios->usuario}}">
            </td>
        </tr>
        <tr>
            <td>Nombre de Usuario:</td>
            <td>
                <input type="text" name="nombre" id="nombre" value="{{$usuarios->nombre}}">
            </td>
        </tr>
        <tr>
            <td>Apellido de Usuario:</td>
            <td>
                <input type="text" name="apellido" id="apellido" value="{{$usuarios->apellido}}">
            </td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td>
                <input type="number" name="edad" id="edad" value="{{$usuarios->edad}}">
            </td>
        </tr>
        <tr>
            <td>Nivel de Formación:</td>
            <td>
                <select name="nivel" id="nivel">
                    <option value="{{$usuarios->nivel_formacion}}"></option>
                    <option value="BACHILLER">BACHILLER</option>
                    <option value="TECNICO">TECNICO</option>
                    <option value="TECNOLOGO">TECNOLOGO</option>
                    <option value="INGENIERO">INGENIERO</option>
                    <option value="MASTER">MASTER</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Modificar Usuario" name="btn_modificar_usuario" id="btn_modificar_usuario">
            </td>
        </tr>
    </table>
</form>
