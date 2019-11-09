<?php 
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_POST['boton'])){
    header("location: Proyecto.php");
}
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
    $info = $objCtrProyecto->consultar();
}

if($bot=="Actualizar"){
    $objProyecto=new Proyecto($id, $titulo, $fechaInsc, $fechaFin, $fechaIni, $cofinanciado, $presupuesto, $porcCof, $estado, $observaciones, $tipoProyecto);
    $objCtrProyecto=new ControlProyecto($objProyecto);
    $objCtrProyecto->actualizar();
}
if(isset($info)){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js/scripts.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <!--INICIO FORM BOOTSTRAP -->
    <h1 class="text-center title-orange">CRUD Proyecto</h1>
    <form id="form1" style="margin: 25px 0 0 0;" action="VistaProyecto.php" method="POST" >

    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <label for="txtId" class="col-md-2">ID</label>
                <input type="text" class="form-control-inline col-md-7" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);" value="<?php echo $info["id"] ?>">
            </div>
            <div class="form-group">
                <label for="txtTitulo" class="col-md-2">Título</label>
                <input type="text" class="form-control-inline col-md-7" name="txtTitulo" id="txtTitulo" placeholder="Título" value="<?php echo $info["titulo"] ?>" required>
            </div>
           
            <div class="form-group">
                <label for="Presupuesto" class="col-md-2">Presupuesto</label>
                <input type="text" class="form-control-inline col-md-7" name="txtPre" id="txtPre" placeholder="Presupuesto" onkeypress="return validarNumeros(event);" value="<?php echo $info["presupuesto"] ?>" required>
            </div>
            <div class="form-group">
                <label for="txtCof" class="col-md-2">Cofinanciado</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtCof" id="txtSi" value="si" <?php echo ($info['cofinanciado']=="si")?"checked":"" ?> >
                    <label class="form-check-label" for="txtSi" >Si</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="txtCof" id="txtNo" value="no" <?php echo ($info['cofinanciado']=="no")?"checked":"" ?>>
                    <label class="form-check-label" for="txtNo">No</label>
                </div>
            </div>
        <div class="form-group">
            <label for="txtPorc" class="col-md-2">Porcentaje Cofinanciado</label>
            <input type="number" class="form-control-inline col-md-7" name="txtPorc" id="txtPorc" placeholder="Porcentaje Cofinanciado" max="100" min="0" onkeypress="return validarNumeros(event);" value="<?php echo $info["porcentaje"] ?>" required>
        </div>
        <div class="form-group">
            <label for="txtEstado" class="col-md-2">Estado</label>
            <input type="text" class="form-control-inline col-md-7" name="txtEstado" id="txtEstado" placeholder="Estado" maxlength="20" value="<?php echo $info["estado"] ?>" required>
        </div>  
    </div>
     <div class="col-md-6">
    
    
    <div class="form-group">
        <label for="txtTipo" class="col-md-2">Tipo</label>
        <input type="text" class="form-control-inline col-md-7" name="txtTipo" id="txtTipo" placeholder="Tipo" maxlength="3" value="<?php echo $info["tipo"] ?>" required>
    </div>
    
    <div class="form-group">
        <label for="txtFin" class="col-md-2">Fecha de Inscripción</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFin" id="txtFin" value="<?php echo $info["fechaIns"] ?>" required>
    </div>
    <div class="form-group">
        <label for="txtFi" class="col-md-2">Fecha de Inicio</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFi" id="txtFi" value="<?php echo $info["fechaIni"] ?>" required>
    </div>
    <div class="form-group">
        <label for="txtFf" class="col-md-2">Fecha de fin</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFf" id="txtFf" value="<?php echo $info["fechaFin"] ?>" required>
    </div>
    <div class="form-group">
        <label for="txtObs" class="col-md-2">Observaciones</label>
        <textarea class="form-control-inline col-md-7" name="txtObs" id="txtObs" cols="15" rows="5"><?php echo $info["observaciones"] ?> 
        </textarea>
    </div>
</div>
</div>

<input type="hidden" id="btnHidden" name="boton" value="">
<div style="margin:5px 0 0 35%">
        <input type="button" class="btn btn-orange" name="boton" value="Guardar"  onclick="validarFechas(this);">
        <input type="submit" class="btn btn-orange" name="boton" value="Consultar">
        <input type="button" class="btn btn-orange" name="boton" value="Actualizar" onclick="validarFechas(this);">
        <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
    </div>
    </form>
  <!--FIN FORM BOOTSTRAP -->
  </body>
</html>
<?php }
?>