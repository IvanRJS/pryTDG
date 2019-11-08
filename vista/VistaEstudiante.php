<?php 
include("../modelo/Estudiante.php");
include("../control/ControlEstudiante.php");
include("../control/CtrConexion.php");

$bot=$_POST['boton'];
$id_persona=$_POST['txtId'];
$nombres=$_POST['txtNombres'];
$apellidos=$_POST['txtApellidos'];
$email=$_POST['txtEmail'];
$telefono=$_POST['txtTelefono'];
$tipo=$_POST['txtTipo'];
$id_estudiante=$_POST['txtIdEst'];
$promedio=$_POST['txtProm'];


if($bot=="Guardar"){
    $objEstudiante=new Estudiante($id_persona, $nombres, $apellidos, $email, $telefono, $tipo, $id_estudiante, $promedio);
    $objCtrEstudiante=new ControlEstudiante($objEstudiante);
    $objCtrEstudiante->guardar();
}
if($bot=="Consultar"){
    $objEstudiante=new Estudiante($id_persona, $nombres, $apellidos, $email, $telefono, $tipo, $id_estudiante, $promedio);
    $objCtrEstudiante=new ControlEstudiante($objEstudiante);
    echo $objCtrEstudiante->consultar();
}
if($bot=="Eliminar"){
    $objEstudiante=new Estudiante($id_persona, $nombres, $apellidos, $email, $telefono, $tipo, $id_estudiante, $promedio);
    $objCtrEstudiante=new ControlEstudiante($objEstudiante);
    $objCtrEstudiante->eliminar();
}
if($bot=="Actualizar"){
    $objEstudiante=new Estudiante($id_persona, $nombres, $apellidos, $email, $telefono, $tipo, $id_estudiante, $promedio);
    $objCtrEstudiante=new ControlEstudiante($objEstudiante);
    $objCtrEstudiante->actualizar();
}




?>