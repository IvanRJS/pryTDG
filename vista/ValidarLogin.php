<?php 
if(!isset($_POST)){
    header("location: ../index.php");
}
if(!isset($_SESSION)){
    session_start();
}
include("../modelo/Usuario_Sesion.php");
include("../control/ControlUsuario_Sesion.php");
include("../control/CtrConexion.php");


if(isset($_POST)){
    $user=trim($_POST['user']);
    $pass=trim($_POST['pass']);
}else{
    header("location: ../index.php");
}

$objUsuario=new Usuario_Sesion("", "", $user, $pass);
$objCtrUsuario=new ControlUsuario_Sesion($objUsuario);
$info=$objCtrUsuario->validarLogin();
if($info!=null){
    $_SESSION['usuario']=$info['usuario'];
    $_SESSION['privilegios']=$info['privilegios'];
    header("location: ../index.php");
}else{
    header("location: ../index.php");
}



?>