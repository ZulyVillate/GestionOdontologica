<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        require_once 'Controlador/Controlador.php';
        require_once 'Modelo/GestorCita.php';
        require_once 'Modelo/Cita.php';
        require_once 'Modelo/Paciente.php';
        require_once 'Modelo/Conexion.php';
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

        /* Prueba dos */
//        if ($_GET[accion] == "asignar") {
//            $controlador->verPagina('Vista/html/asignar.php');
//        } else if ($_GET[accion] == "consultar") {
//            $controlador->verPagina('Vista/html/consultar.php');
//        } else if ($_GET[accion] == "cancelar") {
//            $controlador->verPagina('Vista/html/cancelar.php');
//        } else {
//            $controlador->verPagina('Vista/html/inicio.php');
//        }


        if (isset($_GET['accion'])) {

            /* Prueba tres */
            if ($_GET["accion"] == "asignar") {
                $controlador->verPagina('Vista/html/asignar.php');
            } else if ($_GET["accion"] == "consultar") {
                $controlador->verPagina('Vista/html/consultar.php');
            } else if ($_GET["accion"] == "cancelar") {
                $controlador->verPagina('Vista/html/cancelar.php');
            } else if ($_GET["accion"] == "guardarCita") {
                $controlador->agregarCita($_POST["asignarDocumento"], $_POST["medico"], $_POST["fecha"], $_POST["hora"], $_POST["consultorio"]);
            } else if ($_GET["accion"] == "consultarCita") {
                $controlador->consultarCitas($_POST["consultarDocumento"]);
            } else if ($_GET["accion"] == "cancelarCita") {
                $controlador->cancelarCitas($_POST["cancelarDocumento"]);
            } else {
                $controlador->verPagina('Vista/html/inicio.php');
            }
        }
        ?>
    </body>
</html>
