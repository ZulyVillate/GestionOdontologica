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
                <h1>Sistema de Gestión Odontológica</h1>
            </div> 
            <ul id="menu"> 
                <li><a href="index.php">Inicio</a></li>
                <li><a href="../../index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="../../index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="../../index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <?php $fila = $result->fetch_object(); ?>
                <h2>Información de la cita</h2>
                <table>
                    <tr><th colspan="2">Datos del Paciente</th></tr>
                    <tr>
                        <td>Documento</td>
                        <td><?php echo $fila->PacIdentificacion; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><?php echo $fila->PacNombres . "" . $fila->PacApellidos; ?></td>
                    </tr>
                    <tr><th colspan="2">Datos del Médico</th></tr>
                    <tr>
                        <td>Documento</td>
                        <td><?php echo $fila->MedIdentificacion; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><?php echo $fila->MedNombres . "" . $fila->MedApellidos; ?></td>
                    </tr>
                    <tr><th colspan="2">Datos de la Cita</th></tr>
                    <tr>
                        <td>Número</td>
                        <td><?php echo $fila->CitNumero; ?></td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td><?php echo $fila->CitFecha; ?></td>
                    </tr>
                    <tr>
                        <td>Hora</td>
                        <td><?php echo $fila->CitHora; ?></td>
                    </tr>
                    <tr>
                        <td>Número de Consultorio</td>
                        <td><?php echo $fila->ConNumero; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre del consultorio</td>
                        <td><?php echo $fila->ConNombre; ?></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td><?php echo $fila->CitEstado; ?></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><?php echo $fila->CitObservaiones; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
