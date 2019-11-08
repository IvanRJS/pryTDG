<?php 
include("../modelo/Persona.php");
include("../control/ControlPersona.php");
include("../control/CtrConexion.php");

$bot=$_POST['boton'];
$id=$_POST['txtId'];
$nom=$_POST['txtNombres'];
$ap=$_POST['txtApellidos'];
$email=$_POST['txtEmail'];
$tel=$_POST['txtTelefono'];
$tipo=$_POST['txtTipo'];




if($bot=="Guardar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    $objCtrPersona->guardar();
}


if($bot=="Eliminar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    $objCtrPersona->eliminar();
}


if($bot=="Consultar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    echo $objCtrPersona->consultar();
}

if($bot=="Actualizar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    $objCtrPersona->actualizar();
}
?>