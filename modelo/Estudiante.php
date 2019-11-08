<?php
include('Persona.php');
class Estudiante extends Persona {

var $id_estudiante;
var $promedio;

public function __construct($id_persona, $nombres, $apellidos, $email, $telefono, $tipo,$id_estudiante, $promedio) {
    parent::__construct($id_persona, $nombres, $apellidos, $email, $telefono, $tipo);
    $this->id_estudiante = $id_estudiante;
    $this->promedio = $promedio;
}


function getId_estudiante() {
    return $this->id_estudiante;
}

function getPromedio() {
    return $this->promedio;
}

function setId_estudiante($id_estudiante) {
    $this->id_estudiante = $id_estudiante;
}

function setPromedio($promedio) {
    $this->promedio = $promedio;
    
}




}
