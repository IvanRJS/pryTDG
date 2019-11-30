<?php 
class Producto{
    var $id_proyecto;
    var $id_producto;
    var $fecha;
    var $categoria_producto;

    function __construct($id_producto, $fecha, $categoria_producto) {
        $this->id_producto = $id_producto;
        $this->fecha = $fecha;
        $this->categoria_producto = $categoria_producto;
    }

    

    function getId_producto() {
        return $this->id_producto;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getCategoria_producto() {
        return $this->categoria_producto;
    }


    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setCategoria_producto($categoria_producto) {
        $this->categoria_producto = $categoria_producto;
    }



}


?>