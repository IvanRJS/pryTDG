<?php
session_start();
include("../modelo/Usuario_Sesion.php");
include("../control/ControlUsuario_Sesion.php");
include("../control/CtrConexion.php"); 
if(isset($_POST)){
    $user=trim($_POST['user']);
    $pass=trim($_POST['pass']);
}

$objUsuario=new Usuario_Sesion("", "", $user, $clave);
$objCtrUsuario=new ControlUsuario_Sesion($objUsuario);
if($objCtrUsuario->validarLogin()){
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass;
    header("location: ../index.php");
}else{
    header("location: Login.php");
}

?>