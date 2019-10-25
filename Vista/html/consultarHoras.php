<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <option value="-1" selected="selected">--Seleccione la hora--</option>
    <?php
    while ($fila = $result->fetch_object()) {
        ?>
        <option><?php echo $fila->horas ?></option>
        <?php
    }
    ?>
</body>
</html>
