<?php 
class Usuario_sesion
{
    var $id_persona;
    var $privilegios;
    var $usuario;
    var $clave;

    function __construct($id_persona, $privilegios, $usuario, $clave) {
        $this->id_persona = $id_persona;
        $this->privilegios = $privilegios;
        $this->usuario = $usuario;
        $this->clave = $clave;
    }

    function getId_persona() {
        return $this->id_persona;
    }

    function getPrivilegios() {
        return $this->privilegios;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setPrivilegios($privilegios) {
        $this->privilegios = $privilegios;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }


    
}


?>