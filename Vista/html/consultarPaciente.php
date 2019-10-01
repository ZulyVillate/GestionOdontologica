<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
            <script src="../../script.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr><th>Identificación</th><th>Nombre</th><th>Sexo</th></tr>
                <?php
                $fila = $result->fetch_object();
                ?>
                <tr>
                    <td><?php echo $fila->PacIdentificacion; ?></td>
                    <td><?php echo $fila->PacNombres . " " . $fila->PacApellidos; ?></td>
                    <td><?php echo $fila->PacSexo; ?></td>
                </tr>
            </table>
            <?php
        } else {
            ?>
            El paciente no existe en la base de datos. <br/>
            <input type="button" name="ingPaciente" value="Ingresar Paciente" id="ingPaciente" onclick="ingPaciente()"/>
            <?php
        }
        ?>
    </body>
</html>
