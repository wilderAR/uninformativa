<form action="poner la ubicacion" method="POST">
        <h2>Modificar Perfil</h2>
        <table>
            <tr>
                <td>Usuario:</td>
                <td>
                    <input type="text" name="usuario" id="usuario_modificar_perfil_usuario">
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="nombre_modificar_perfil_usuario" id="nombre_modificar_perfil_usuario">
                </td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td>
                    <input type="text" name="apellido_modificar_perfil_usuario" id="apellido_modificar_perfil_usuario">
                </td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td>
                    <input type="number" name="edad_modificar_perfil_usuario" id="edad_modificar_perfil_usuario">
                </td>
            </tr>
            <tr>
                <td>Correo Electrónico:</td>
                <td>
                    <input type="text" name="correo_modificar_perfil_usuario" id="correo_modificar_perfil_usuario">
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
                    <input type="button" value="Modificar Perfil" name="btn_modificar_perfil" id="btn_modificar_perfil">
                </td>
            </tr>
        </table>
    </form>
