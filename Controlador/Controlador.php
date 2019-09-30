<?php

require_once 'Controlador/Controlador.php';
require_once 'Modelo/GestorCita.php';
require_once 'Modelo/Cita.php';
require_once 'Modelo/Paciente.php';
require_once 'Modelo/Conexion.php';

$controlador = new Controlador();

class Controlador {

    public function verPagina($ruta) {
//        require_once $ruta;
        //require_once($_SERVER['DOCUMENT_ROOT']."//GestionOdontologica//".$ruta);
           header("Location: " . $ruta);
        }

    public function agregarCita($doc, $med, $fec, $hor, $con) {
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada", "Ninguna");
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorId($id);
//       require_once 'Vista/html/confirmarCita.php';
        
//        $result = $gestorCita->consultaPrueba();
         //header("Location: " . 'Vista/html/confirmarCita.php');
         require_once 'Vista/html/confirmarCita.php';
    }

    public function consultarCitas($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/consultarCitas.php';
    }
    
    public function cancelarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/cancelarCitas.php';
        
    }

}
