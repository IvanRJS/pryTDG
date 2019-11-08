<?php 
class Proyecto_Financiado
{

    var $id_financiador;
    var $id_proyecto;
    var $fecha;
    var $porcentaje_financiado;


    function __construct($id_financiador, $id_proyecto, $fecha, $porcentaje_financiado) {
        $this->id_financiador = $id_financiador;
        $this->id_proyecto = $id_proyecto;
        $this->fecha = $fecha;
        $this->porcentaje_financiado = $porcentaje_financiado;
    }

    function getId_financiador() {
        return $this->id_financiador;
    }

    function getId_proyecto() {
        return $this->id_proyecto;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getPorcentaje_financiado() {
        return $this->porcentaje_financiado;
    }

    function setId_financiador($id_financiador) {
        $this->id_financiador = $id_financiador;
    }

    function setId_proyecto($id_proyecto) {
        $this->id_proyecto = $id_proyecto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setPorcentaje_financiado($porcentaje_financiado) {
        $this->porcentaje_financiado = $porcentaje_financiado;
    }


    
}


?>