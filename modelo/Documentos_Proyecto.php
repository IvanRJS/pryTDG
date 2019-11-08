<?php
class Documentos_Proyecto
{
    var $id_documento;
    var $id_proyecto;
    var $fecha_documento;
    var $enlace_documento;


    function __construct($id_documento, $id_proyecto, $fecha_documento, $enlace_documento) {
        $this->id_documento = $id_documento;
        $this->id_proyecto = $id_proyecto;
        $this->fecha_documento = $fecha_documento;
        $this->enlace_documento = $enlace_documento;
    }

    function getId_documento() {
        return $this->id_documento;
    }

    function getId_proyecto() {
        return $this->id_proyecto;
    }

    function getFecha_documento() {
        return $this->fecha_documento;
    }

    function getEnlace_documento() {
        return $this->enlace_documento;
    }

    function setId_documento($id_documento) {
        $this->id_documento = $id_documento;
    }

    function setId_proyecto($id_proyecto) {
        $this->id_proyecto = $id_proyecto;
    }

    function setFecha_documento($fecha_documento) {
        $this->fecha_documento = $fecha_documento;
    }

    function setEnlace_documento($enlace_documento) {
        $this->enlace_documento = $enlace_documento;
    }




    
}


?>