<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Persona</title>
    <script src="../js/scripts.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include("header.php"); ?>
    <!--INICIO FORMULARIO BOOTSTRAP-->
    <form style="margin: 20px 0px 0px 30px;" action="VistaPersona.php" method="POST">
            <h1 class="title-orange">CRUD Persona</h1>
            <div class="form-group">
                <label for="txtId" class="col-md-2">ID</label>
                <input type="text" class="form-control-md" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);" required>
            </div>
            <div class="form-group">
                <label for="txtUsuario" class="col-md-2">Nombres</label>
              <input type="text" class="form-control-md" name="txtUsuario" id="txtUsuario" placeholder="Nombres" onkeypress="return validarLetras(event);" required>
            </div>
            <div class="form-group">
                <label for="txtApellidos" class="col-md-2">Apellidos</label>
                <input type="text" class="form-control-md" name="txtApellidos" id="txtApellidos" placeholder="Apellidos" onkeypress="return validarLetras(event);" required>
            </div>
            <div class="form-group">
                <label for="txtEmail" class="col-md-2">Email</label>
                <input type="email" class="form-control-md" name="txtEmail" id="txtEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="txtTelefono" class="col-md-2">Clave</label>
                <input type="text" class="form-control-md" name="txtTelefono" id="txtTelefono" placeholder="Teléfono" onkeypress="return validarNumeros(event);" maxlength="15" required>
            </div>
            <div class="form-group">
                <label for="txtTipo" class="col-md-2">Tipo</label>
                <input type="text" class="form-control-md" name="txtTipo" id="txtTipo" placeholder="Tipo" maxlength="3" required>
            </div>
             
            
                <input type="submit" class="btn btn-orange" name="boton" value="Guardar">
              <input type="submit" class="btn btn-orange" name="boton" value="Consultar">
              <input type="submit" class="btn btn-orange" name="boton" value="Actualizar">
              <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
          </form>
    <!--FIN FORMULARIO BOOTSTRAP-->
</body>
</html>