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
    <title>Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js/scripts.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>  
<?php include("header.php"); ?>
   
<!--INICIO FORM BOOTSTRAP -->
<form style="margin: 20px 0 0 30px;" action="VistaUsuario_Sesion.php" method="POST">
        <h3 class="title-orange">CRUD Usuario</h3>
        <div class="form-group">
          <label for="txtId" class="col-md-2">ID</label>
            <input type="text" class="form-control-md" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);"  required>
        </div>
        <div class="form-group">
          <label for="txtUsuario" class="col-md-2">Nombres</label>
          <input type="text" class="form-control-md" name="txtUsuario" id="txtUsuario" placeholder="Nombres" required>
        </div>
        <div class="form-group">
          <label for="txtClave" class="col-md-2">Clave</label>
            <input type="password" class="form-control-md" name="txtClave" id="txtClave" placeholder="Clave" required>
        </div>
        
        
            <input type="submit" class="btn btn-orange" name="boton" value="Guardar">
          <input type="submit" class="btn btn-orange" name="boton" value="Consultar">
          <input type="submit" class="btn btn-orange" name="boton" value="Actualizar">
          <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
      </form>
  <!--FIN FORM BOOTSTRAP -->
    </body>
</html>