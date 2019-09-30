<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        if(isset($_GET[accion])){
//            if($_GET[accion]=="asignar"){
//                require_once 'Vista/html/asignar.php';
//            }
//            if($_GET[accion]=="consultar"){
//                require_once 'Vista/html/consultar.php';
//            }
//            if($_GET[accion]=="cancelar"){
//                require_once 'Vista/html/cancelar.php';
//            }
//        }
//        else{
//            require_once 'Vista/html/inicio.php';
//        }
        
        /*Prueba dos*/
//        if ($GET[accion] == "asignar") {
//            $controlador->verPagina('Vista/html/asignar.php');
//        } else if ($GET[accion] == "consultar") {
//            $controlador->verPagina('Vista/html/consultar.php');
//        } else if ($GET[accion] == "cancelar") {
//            $controlador->verPagina('Vista/html/cancelar.php');
//        } else {
//            $controlador->verPagina('Vista/html/inicio.php');
//        }
        
        /*Prueba tres*/
        if ($GET["accion"] == "asignar") {
            $controlador->verPagina('Vista/html/asignar.php');
        } else if ($GET["accion"] == "consultar") {
            $controlador->verPagina('Vista/html/consultar.php');
        } else if ($GET["accion"] == "cancelar") {
            $controlador->verPagina('Vista/html/cancelar.php');
        } else if ($GET["accion"] == "guardarCita") {
            $controlador->agregarCita($_POST["asignarDocumento"],$_POST["medico"],$_POST["fecha"],$_POST["hora"],$_POST["consultorio"]);
        } else if ($GET["accion"] == "consultarCita") {
            $controlador->consultarCitas($_POST["consultarDocumento"]);
        }
        else if ($GET["accion"] == "cancelarCita") {
            $controlador->cancelarCitas($_POST["cancelarDocumento"]);
        }
        else {
            $controlador->verPagina('Vista/html/inicio.php');
        }
        
        ?>
    </body>
</html>
