<?php

class Proyecto {

var $id;
var $titulo;
var $fechaInsc;
var $fechaFin;
var $fechaIni;
var $cofinanciado;
var $presupuesto;
var $porcCof;
var $estado;
var $observaciones;
var $tipoProyecto;

function __construct($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->fechaInsc = $fechaInsc;
    $this->fechaFin = $fechaFin;
    $this->fechaIni = $fechaIni;
    $this->cofinanciado = $cofinanciado;
    $this->presupuesto = $presupuesto;
    $this->porcCof = $porcCof;
    $this->estado = $estado;
    $this->observaciones = $observaciones;
    $this->tipoProyecto = $tipoProyecto;
}

function getId() {
    return $this->id;
}

function getTitulo() {
    return $this->titulo;
}

function getFechaInsc() {
    return $this->fechaInsc;
}

function getFechaFin() {
    return $this->fechaFin;
}

function getFechaIni() {
    return $this->fechaIni;
}

function getCofinanciado() {
    return $this->cofinanciado;
}

function getPresupuesto() {
    return $this->presupuesto;
}

function getPorcCof() {
    return $this->porcCof;
}

function getEstado() {
    return $this->estado;
}

function getObservaciones() {
    return $this->observaciones;
}

function getTipoProyecto() {
    return $this->tipoProyecto;
}

function setId($id) {
    $this->id = $id;
}

function setTitulo($titulo) {
    $this->titulo = $titulo;
}

function setFechaInsc($fechaInsc) {
    $this->fechaInsc = $fechaInsc;
}

function setFechaFin($fechaFin) {
    $this->fechaFin = $fechaFin;
}

function setFechaIni($fechaIni) {
    $this->fechaIni = $fechaIni;
}

function setCofinanciado($cofinanciado) {
    $this->cofinanciado = $cofinanciado;
}

function setPresupuesto($presupuesto) {
    $this->presupuesto = $presupuesto;
}

function setPorcCof($porcCof) {
    $this->porcCof = $porcCof;
}

function setEstado($estado) {
    $this->estado = $estado;
}

function setObservaciones($observaciones) {
    $this->observaciones = $observaciones;
}

function setTipoProyecto($tipoProyecto) {
    $this->tipoProyecto = $tipoProyecto;
}



}

?>