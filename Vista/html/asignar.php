<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <title>Asignar Cita</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
            <script src="http://code.jquery.com/jquery-1.8.1.js" type="text/javascript"></script>
            <script src="../js/script.js" type="text/javascript"></script>

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
                                <input type="button" name="asignarConsulta" value="Consultar" id="asignarConsultar" onclick="consultarPaciente()"/>
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente"></div></td></tr> 
                        <tr>
                            <td>Médico</td>
                            <td>
                                <select id="medico" name="medico">
                                    <option value="-1" selected="selected">--Seleccione el médico--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><input type="text" name="fecha" id="fecha" /></td>
                        </tr>
                        <tr>
                            <td>Hora</td>
                            <td>
                                <select id="hora" name="hora" onmousedown="seleccionarHora()" onclick="cargarHoras()">
                                    <option value="-1" selected="selected">--Seleccione la hora--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Consultorio</td>
                            <td>
                                <select id="consultorio" name="consultorio">
                                    <option value="-1" selected="selected">--Seleccione el consultorio--</option>
                                    <option value="1">1 Consultas1</option>
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
        <div id="frmPaciente" title="Agregar nuevo paciente">
            <form id="agregarPaciente">
                <table>
                    <tr>
                        <td>Documento</td>
                        <td><input type="text" name="pacDocumento" id="pacDocumento"/></td>
                    </tr>
                    <tr>
                        <td>Nombres</td>
                        <td><input type="text" name="pacNombres" id="pacNombres"/></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><input type="text" name="pacApellidos" id="pacApellidos"/></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td>
                        <td><input type="text" name="pacNacimiento" id="pacNacimiento"/></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td>
                            <select id="pacSexo" name="pacSexo">
                                <option value="-1" selected="selected">--Seleccione Sexo--</option>
                                <option>m</option>
                                <option>f</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" onclick="insertarPaciente()">Insertar</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>
