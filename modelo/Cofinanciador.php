<?php 
class Cofinanciador
{
    var $id_cofinanciador;
    var $nombre;
    var $telefono;
    var $email;

  
    function __construct($id_cofinanciador, $nombre , $email , $telefono) {
        $this->id_cofinanciador = $id_cofinanciador;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    
    function getId_cofinanciador() {
        return $this->id_cofinanciador;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setId_cofinanciador($id_cofinanciador) {
        $this->id_cofinanciador = $id_cofinanciador;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }



}

?>