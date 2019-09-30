<?php
require_once 'Controlador/Controlador.php';
require_once 'Modelo/GestorCita.php';
require_once 'Modelo/Cita.php';
require_once 'Modelo/Paciente.php';
require_once 'Modelo/Conexion-php';
class Paciente {
   private $identificacion;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $sexo;

    public function __construct($id,$nom,$ape,$fNa,$sex){
        $this->identificacion = $id ;
        $this->nombres =$nom;
        $this->apellidos = $ape;
        $this->fechaNacimiento = $fNa ;
        $this->sexo = $sex;
    }

    public function obtenerIdentificacion(){
        return $this->identificacion;
    }
    public function obtenerNombres(){
        return $this->nombres;
    }
    public function obtenerApellidos(){
        return $this->apellidos;
    }
    public function obtenerFechaNAcimiento(){
        return $this->fechaNacimiento;
    }
    public function obtenerSexo(){
        return $this->sexo;
    }
}
?>