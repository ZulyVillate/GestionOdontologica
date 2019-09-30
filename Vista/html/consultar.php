<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <title>Sistema de Gestión Odontológica</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <h1>Consultar Cita</h1>
            </div> 
            <ul id="menu"> 
                <li><a href="index.php">Inicio</a></li>
                <li ><a href="../../index.php?accion=asignar">Asignar cita</a></li>
                <li class="activa"><a href="../../index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="../../index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Consultar Cita</h2>
                <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="consultarDocumento" id="consultarDocumento"/></td>
                        </tr>
                        <tr>
                            <td conspan="2">
                                <input type="submit" name="consultarConsultar" value="consultar" id="consultarConsultar"/>
                            </td>
                        </tr>
                        <tr>
                            <td conspan="2">
                                <div id="paciente2"> </div>
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
