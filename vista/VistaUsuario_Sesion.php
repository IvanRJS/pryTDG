<?php 
include("../modelo/Usuario_Sesion.php");
include("../control/ControlUsuario_Sesion.php");
include("../control/CtrConexion.php");

$bot=$_POST['boton'];
$id_persona=$_POST['txtId'];
$privilegios="";
$usuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];


if($bot=="Guardar"){
    $objUsuario_Sesion=new Usuario_Sesion($id_persona, $privilegios, $usuario, $clave);
    $objCtrUsuario_Sesion=new ControlUsuario_Sesion($objUsuario_Sesion);
    $objCtrUsuario_Sesion->guardar();
}
if($bot=="Consultar"){
    $objUsuario_Sesion=new Usuario_Sesion($id_persona, $privilegios, $usuario, $clave);
    $objCtrUsuario_Sesion=new ControlUsuario_Sesion($objUsuario_Sesion);
    echo $objCtrUsuario_Sesion->consultar();
}
if($bot=="Eliminar"){
    $objUsuario_Sesion=new Usuario_Sesion($id_persona, $privilegios, $usuario, $clave);
    $objCtrUsuario_Sesion=new ControlUsuario_Sesion($objUsuario_Sesion);
    $objCtrUsuario_Sesion->eliminar();
}
if($bot=="Actualizar"){
    $objUsuario_Sesion=new Usuario_Sesion($id_persona, $privilegios, $usuario, $clave);
    $objCtrUsuario_Sesion=new ControlUsuario_Sesion($objUsuario_Sesion);
    $objCtrUsuario_Sesion->actualizar();
}




?>