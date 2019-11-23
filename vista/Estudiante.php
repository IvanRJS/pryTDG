<?php 
    if(!isset($_SESSION)):
        session_start();
    endif;
    if(!isset($_SESSION['usuario'])):
        header("location:../index.php");
    endif;
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js/scripts.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script>
    
    
    </script>
</head>
<body>
<?php include("header.php"); ?>
    <!--INICIO FORM BOOTSTRAP -->
    <h1 class="text-center title-orange">CRUD Estudiante</h1>
<form style="margin: 20px 0px 0px 30px;" action="VistaEstudiante.php" method="POST">
        <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                        <label for="txtId" class="col-md-2">ID</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);" required>
                </div>
                <div class="form-group">
                        <label for="txtNombres" class="col-md-2">Nombres</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtNombres" id="txtNombres" placeholder="Nombres" onkeypress="return validarLetras(event);" required>
                </div>
                
                <div class="form-group">
                        <label for="txtEmail" class="col-md-2">Email</label>
                        <input type="email" class="form-control-inline col-md-7" name="txtEmail" id="txtEmail" placeholder="Email" required>
                </div>
                <div class="form-group">
                        <label for="txtApellidos" class="col-md-2">Apellidos</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtApellidos" id="txtApellidos" placeholder="Apellidos" onkeypress="return validarLetras(event);" required>
                </div>
        </div>
        <div class="col-md-6">
                
                <div class="form-group">
                        <label for="txtTelefono" class="col-md-2">Teléfono</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtTelefono" id="txtTelefono" placeholder="Teléfono" onkeypress="return validarNumeros(event);">
                </div>
                <div class="form-group">
                        <label for="txtTipo" class="col-md-2">Tipo</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtTipo" id="txtTipo" placeholder="Tipo" required>
                </div>
                <div class="form-group">
                        <label for="txtIdEst" class="col-md-2">ID Estudiante</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtIdEst" id="txtIdEst" placeholder="ID Estudiante" required>
                </div>
                <div class="form-group">
                        <label for="txtProm" class="col-md-2">Promedio</label>
                        <input type="text" class="form-control-inline col-md-7" name="txtProm" id="txtProm" placeholder="Promedio" onkeypress="return validarNumeros(event);" required>
                </div>
        </div>
                
</div>
<div style="margin:0 0 0 37%">

        <input type="submit" class="btn btn-orange" name="boton" value="Guardar">
        <input type="submit" class="btn btn-orange" name="boton" value="Consultar">
        <input type="submit" class="btn btn-orange" name="boton" value="Actualizar">
        <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
</div>
</form>
<!--FIN FORM BOOTSTRAP -->
</body>
</html>