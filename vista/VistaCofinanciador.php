<?php 
include("../modelo/Cofinanciador.php");
include("../control/ControlCofinanciador.php");
include("../control/CtrConexion.php");

$bot=$_POST['boton'];
$id_cofinanciador=$_POST['txtId'];
$nombre=$_POST['txtNombre'];
$email=$_POST['txtEmail'];
$telefono=$_POST['txtTelefono'];


if($bot=="Guardar"){
    $objCofinanciador=new Cofinanciador($id_cofinanciador, $nombre, $email, $telefono);
    $objCtrCofinanciador=new ControlCofinanciador($objCofinanciador);
    $objCtrCofinanciador->guardar();
}
if($bot=="Consultar"){
    $objCofinanciador=new Cofinanciador($id_cofinanciador, $nombre, $email, $telefono);
    $objCtrCofinanciador=new ControlCofinanciador($objCofinanciador);
    echo $objCtrCofinanciador->consultar();
}
if($bot=="Eliminar"){
    $objCofinanciador=new Cofinanciador($id_cofinanciador, $nombre, $email, $telefono);
    $objCtrCofinanciador=new ControlCofinanciador($objCofinanciador);
    $objCtrCofinanciador->eliminar();
}
if($bot=="Actualizar"){
    $objCofinanciador=new Cofinanciador($id_cofinanciador, $nombre, $email, $telefono);
    $objCtrCofinanciador=new ControlCofinanciador($objCofinanciador);
    $objCtrCofinanciador->actualizar();
}




?>