<?php


class Persona {
    var $id_persona;
    var $nombres;
    var $apellidos;
    var $email;
    var $telefono;
    var $tipo;
    
    function __construct($id_persona, $nombres, $apellidos, $email, $telefono, $tipo) {
        $this->id_persona = $id_persona;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->tipo = $tipo;
    }

    
    function getId_persona() {
        return $this->id_persona;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}

?>