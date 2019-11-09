<?php 
session_start();
if(isset($_POST)){
    $user=$_POST['user'].trim();
    $pass=$_POST['pass'];
}

$objUsuario=new Usuario_Sesion("", "", $user, $clave);
$objCtrUsuario=new ControlUsuario_Sesion($objUsuario);
$objCtrUsuario->validarLogin();

?>