<?php

require_once 'Controlador/Controlador.php';
require_once 'Modelo/GestorCita.php';
require_once 'Modelo/Cita.php';
require_once 'Modelo/Paciente.php';
require_once 'Modelo/Conexion.php';

class Conexion {

    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $citaId;

    public function abrir() {
        $this->mySQLI = new mysqli("localhost", "Zuly", "123456", "citasmedicas");
        if (mysqli_connect_error()) {
            return 0;
        } else {
            return 1;
        }
    }

    public function cerrar() {
        $this->mySQLI->close();
    }

    public function consultar($sql) {
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
        $this->filasAfectadas = $this->mySQLI->affected_rows;
        $this->citaId = $this->mySQLI->insert_id;
    }

    public function consultarPrueba() {
        $sql2 = "SELECT pacientes.*,medicos.*,consultorios.*, citas.*
              FROM pacientes,medicos,consultorios,citas
              WHERE citas.CitPaciente = pacientes.PacIdentificacion
              AND citas.CitMedico = medicos.MedIdentificacion
              AND citas.CitConsultorio = consultorios.ConNumero
              AND citas.CitNumero = 2";
         $result = $this->mySQLI->query($sql2);
         return $result;
    }

    public function obtenerResult() {
        return $this->result;
    }

    public function obtenerFilasAfectadas() {
        return $this->filasAfectadas;
    }

    public function obtenerCitaId() {
        return $this->citaId;
    }

}

?>
