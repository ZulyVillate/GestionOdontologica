<?php

require_once 'Controlador/Controlador.php';
require_once 'Modelo/GestorCita.php';
require_once 'Modelo/Cita.php';
require_once 'Modelo/Paciente.php';
require_once 'Modelo/Conexion-php';

$controlador = new Controlador();

class Controlador {

    public function verPagina($ruta) {
        require_once $ruta;
    }

    public function agregarCita($doc, $med, $fec, $hor, $con) {
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada","Ninguna");
        $gestorCita = new GestorCita();
        $gestorCita->agregarCita($cita);
    }

}
