<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <title>Asignar Cita</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <h1>Sistema de Gestión Odontológica</h1>
            </div> 
            <ul id="menu"> 
                <li><a href="index.php">Inicio</a></li>
                <li class="activa"><a href="../../index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="../../index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="../../index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Asignar cita</h2>

                <form action="../../index.php?accion=guardarCita" method="post" id="frmasignar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="asignarDocumento" id="asignarDocumento"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" name="asignarConsulta" value="Consultar" id="asignarConsultar"/>
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente"></div></td></tr>
                        <tr>
                            <td>Médico</td>
                            <td>
                                <select id="medico" name="medico">
                                    <option value="-1" selected="selected">--Seleccione el médico--</option>
                                    <option value="12345">12345 Camilo Robledo</option>
                                    <option value="67890">67890 Esteban Salgado</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><input type="text" name="fecha" id="fecha"/></td>
                        </tr>
                        <tr>
                            <td>Hora</td>
                            <td>
                                <select id="hora" name="hora">
                                    <option value="-1" selected="selected">--Seleccione la hora--</option>
                                    <option>08:00:00</option>
                                    <option>08:20:00</option>
                                    <option>08:40:00</option>
                                    <option>09:00:00</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Consultorio</td>
                            <td>
                                <select id="consultorio" name="consultorio">
                                    <option value="-1" selected="selected">--Seleccione el consultorio</option>
                                    <option value="1">1 Concultas1</option>
                                    <option value="2">2 Tratamientos2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
