<?php 
class Proyecto_persona
{
    var $id_persona;
    var $id_proyecto;
    var $rol;

  
    function __construct($id_persona, $id_proyecto, $rol) {
        $this->id_persona = $id_persona;
        $this->id_proyecto = $id_proyecto;
        $this->rol = $rol;
    }


    function getId_persona() {
        return $this->id_persona;
    }

    function getId_proyecto() {
        return $this->id_proyecto;
    }

    function getRol() {
        return $this->rol;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setId_proyecto($id_proyecto) {
        $this->id_proyecto = $id_proyecto;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }




    
}




?>