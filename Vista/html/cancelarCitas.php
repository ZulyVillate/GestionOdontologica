<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr><th>Número</th><th>Fecha</th><th>Hora</th></tr>
                <?php
                while ($fila = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td><?php echo $fila->CitNumero; ?></td>
                        <td><?php echo $fila->CitFecha; ?></td>
                        <td><?php echo $fila->CitHora; ?></td>
                        <td>Cancelar</td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            ?>
            El paciente no posse citas asignadas
            <?php
        }
        ?>
    </body>
</html>
