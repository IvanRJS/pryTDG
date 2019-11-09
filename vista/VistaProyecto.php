<?php 
include("../modelo/Proyecto.php");
include("../control/ControlProyecto.php");
include("../control/CtrConexion.php");

$bot=$_POST['boton'];
$id=$_POST['txtId'];
$titulo=$_POST['txtTitulo'];
$fechaInsc=$_POST['txtFin'];
$fechaFin=$_POST['txtFf'];
$fechaIni=$_POST['txtFi'];
$cofinanciado=$_POST['txtCof'];
$presupuesto=$_POST['txtPre'];
$porcCof=$_POST['txtPorc'];
$estado=$_POST['txtEstado'];
$observaciones=$_POST['txtObs'];
$tipoProyecto=$_POST['txtTipo'];


if($bot=="Guardar"){
    $objProyecto=new Proyecto($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto);
    $objCtrProyecto=new ControlProyecto($objProyecto);
    $objCtrProyecto->guardar();
}


if($bot=="Eliminar"){
    $objProyecto=new Proyecto($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto);
    $objCtrProyecto=new ControlProyecto($objProyecto);
    $objCtrProyecto->eliminar();
}


if($bot=="Consultar"){
    $objProyecto=new Proyecto($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto);
    $objCtrProyecto=new ControlProyecto($objProyecto);
    echo $objCtrProyecto->consultar();
}

if($bot=="Actualizar"){
    $objProyecto=new Proyecto($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto);
    $objCtrProyecto=new ControlProyecto($objProyecto);
    $objCtrProyecto->actualizar();
}
?>