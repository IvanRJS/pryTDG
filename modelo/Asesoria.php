<?php
class Asesoria{
var $id_persona;
var $id_proyecto;
var $id_asesoria;
var $fecha;
var $descripcion;

function __construct($id_persona, $id_proyecto, $id_asesoria, $fecha, $descripcion) {
    $this->id_persona = $id_persona;
    $this->id_proyecto = $id_proyecto;
    $this->id_asesoria = $id_asesoria;
    $this->fecha = $fecha;
    $this->descripcion = $descripcion;
}


function getId_persona() {
    return $this->id_persona;
}

function getId_proyecto() {
    return $this->id_proyecto;
}

function getId_asesoria() {
    return $this->id_asesoria;
}

function getFecha() {
    return $this->fecha;
}

function getDescripcion() {
    return $this->descripcion;
}

function setId_persona($id_persona) {
    $this->id_persona = $id_persona;
}

function setId_proyecto($id_proyecto) {
    $this->id_proyecto = $id_proyecto;
}

function setId_asesoria($id_asesoria) {
    $this->id_asesoria = $id_asesoria;
}

function setFecha($fecha) {
    $this->fecha = $fecha;
}

function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}



}








?>