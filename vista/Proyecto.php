<?php 
    if(!isset($_SESSION)):
        session_start();
    endif;
    if(!isset($_SESSION['usuario'])):
        header("location:../index.php");
    endif;
    ?>
    <?php

include("../modelo/Producto.php");
include("../control/ControlProducto.php");
include("../control/CtrConexion.php");
    $objProducto=new Producto("", "", "");
    $objCtrProducto=new controlProducto($objProducto);
    $productos = $objCtrProducto->consultar();
   
?>
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
                <input type="text" class="form-control-inline col-md-7" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);">
            </div>
            <div class="form-group">
                <label for="txtTitulo" class="col-md-2">Título</label>
                <input type="text" class="form-control-inline col-md-7" name="txtTitulo" id="txtTitulo" placeholder="Título" required>
            </div>
           
            <div class="form-group">
                <label for="Presupuesto" class="col-md-2">Presupuesto</label>
                <input type="text" class="form-control-inline col-md-7" name="txtPre" id="txtPre" placeholder="Presupuesto" onkeypress="return validarNumeros(event);" required>
            </div>
            <div class="form-group">
                <label for="txtCof" class="col-md-2">Cofinanciado</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="txtCof" id="txtSi" value="si" >
                    <label class="form-check-label" for="txtSi">Si</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="txtCof" id="txtNo" value="no" checked>
                    <label class="form-check-label" for="txtNo">No</label>
                </div>
            </div>
        <div class="form-group">
            <label for="txtPorc" class="col-md-2">Porcentaje Cofinanciado</label>
            <input type="number" class="form-control-inline col-md-7" name="txtPorc" id="txtPorc" placeholder="Porcentaje Cofinanciado" max="100" min="0" onkeypress="return validarNumeros(event);" required>
        </div>
        <div class="form-group">
            <label for="txtEstado" class="col-md-2">Estado</label>
            <input type="text" class="form-control-inline col-md-7" name="txtEstado" id="txtEstado" placeholder="Estado" maxlength="20" required>
        </div>  
        <div class="form-group">
        <label class="col-md-2" for="producto">Producto</label>
      <select class="form-control-inline col-md-7" id="producto" name="producto">
      <option value="">Seleccione un producto</option>
      <?php
        $i=0;
        foreach ($productos as $producto) { ?>
             <option value="<?php echo $producto[0]; ?>"><?php echo $producto[2]; ?></option>
        <?php 
           
        }
      ?>
        
      </select>
        </div>
    </div>
     <div class="col-md-6">
    
    
    <div class="form-group">
        <label for="txtTipo" class="col-md-2">Tipo</label>
        <input type="text" class="form-control-inline col-md-7" name="txtTipo" id="txtTipo" placeholder="Tipo" maxlength="3" required>
    </div>
    
    <div class="form-group">
        <label for="txtFin" class="col-md-2">Fecha de Inscripción</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFin" id="txtFin" required>
    </div>
    <div class="form-group">
        <label for="txtFi" class="col-md-2">Fecha de Inicio</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFi" id="txtFi" required>
    </div>
    <div class="form-group">
        <label for="txtFf" class="col-md-2">Fecha de fin</label>
        <input type="date" class="form-control-inline col-md-7" name="txtFf" id="txtFf" required>
    </div>
    
    <div class="form-group">
        <label for="txtObs" class="col-md-2">Observaciones</label>
        <textarea class="form-control-inline col-md-7" name="txtObs" id="txtObs" cols="15" rows="5"></textarea>
    </div>
</div>
</div>

<input type="hidden" id="btnHidden" name="boton" value="">
<div style="margin:5px 0 0 35%">
        <input type="button" class="btn btn-orange" name="boton" value="Guardar"  onclick="validarFechas(this);">
        <input type="button" class="btn btn-orange" name="boton" value="Consultar" onclick="consultarDatos(this);">
        <input type="button" class="btn btn-orange" name="boton" value="Actualizar" onclick="validarFechas(this);">
        <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
    </div>
    </form>
   
  <!--FIN FORM BOOTSTRAP -->
</body>
</html>