<?php 
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['usuario'])):
    header("location:../index.php");
endif;

if(!isset($_POST['boton'])){
    header("location: Proyecto.php");
}
include("../modelo/Persona.php");
include("../control/ControlPersona.php");
include("../control/CtrConexion.php");
#mensajes de exito o error
$success="";
$fail="";

$bot=$_POST['boton'];
$id=$_POST['txtId'];
$nom=$_POST['txtUsuario'];
$ap=$_POST['txtApellidos'];
$email=$_POST['txtEmail'];
$tel=$_POST['txtTelefono'];
$tipo=$_POST['txtTipo'];




if($bot=="Guardar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    if($objCtrPersona->guardar()){
        $success= "Datos guardados correctamente";
    }else{
        $fail= "Error al guardados los datos";
    }
}


if($bot=="Eliminar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    if($objCtrPersona->eliminar()){
        $success= "Datos guardados correctamente";
    }else{
        $fail= "Error al guardados los datos";
    }
}


if($bot=="Consultar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    $info= $objCtrPersona->consultar();
}

if($bot=="Actualizar"){
    $objPersona=new Persona($id, $nom, $ap, $email, $tel, $tipo);
    $objCtrPersona=new ControlPersona($objPersona);
    if($objCtrPersona->actualizar()){
        $success= "Datos guardados correctamente";
    }else{
        $fail= "Error al guardados los datos";
    }
}
?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Persona</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/scripts.js"></script>
</head>
<body>
<?php include("header.php"); ?>
    <!--INICIO FORMULARIO BOOTSTRAP-->
    <form id="form1" style="margin: 20px 0px 0px 30px;" action="VistaPersona.php" method="POST">
            <h1 class="title-orange">CRUD Persona</h1>
            <div class="form-group">
                <label for="txtId" class="col-md-2">ID</label>
                <input type="text" class="form-control-md" name="txtId" id="txtId"  placeholder="ID" onkeypress="return validarNumeros(event);" value="<?php echo $info["id"]??""; ?>" required>
            </div>
            <div class="form-group">
                <label for="txtUsuario" class="col-md-2">Nombres</label>
              <input type="text" class="form-control-md" name="txtUsuario" id="txtUsuario" placeholder="Nombres" onkeypress="return validarLetras(event);" value="<?php echo $info["nombres"]??""; ?>" required>
            </div>
            <div class="form-group">
                <label for="txtApellidos" class="col-md-2">Apellidos</label>
                <input type="text" class="form-control-md" name="txtApellidos" id="txtApellidos" placeholder="Apellidos" onkeypress="return validarLetras(event);" value="<?php echo $info["apellidos"]??""; ?>" required>
            </div>
            <div class="form-group">
                <label for="txtEmail" class="col-md-2">Email</label>
                <input type="email" class="form-control-md" name="txtEmail" id="txtEmail" placeholder="Email" value="<?php echo $info["email"]??""; ?>" required>
            </div>
            <div class="form-group">
                <label for="txtTelefono" class="col-md-2">Teléfono</label>
                <input type="text" class="form-control-md" name="txtTelefono" id="txtTelefono" placeholder="Teléfono" onkeypress="return validarNumeros(event);" maxlength="15" value="<?php echo $info["telefono"]??""; ?>" required>
            </div>
            <div class="form-group">
                <label for="txtTipo" class="col-md-2">Tipo</label>
                <input type="text" class="form-control-md" name="txtTipo" id="txtTipo" placeholder="Tipo" maxlength="3" value="<?php echo $info["tipo"]??""; ?>" required>
            </div>
            <?php 
#mostrar mensajes (si hay) de exito o error al dar click en guardar,actualizar o eliminar
echo ($success!="")?'<p class="text-center font-weight-bold text-success">'.$success.'</p>':"";
$success="";
echo ($fail!="")?'<p class="text-center font-weight-bold text-danger">'.$fail.'</p>':"";
$fail="";
     ?>
            
            <input type="hidden" id="btnHidden" name="boton" value="">
                <input type="submit" class="btn btn-orange" name="boton" value="Guardar" onclick="agregarRequired();validar();">
              <input type="submit" class="btn btn-orange" name="boton" value="Consultar" onclick="consultarDatos2(this);">
              <input type="submit" class="btn btn-orange" name="boton" value="Actualizar"onclick="agregarRequired();validar();">
              <input type="submit" class="btn btn-orange" name="boton" value="Eliminar">
          </form>
    <!--FIN FORMULARIO BOOTSTRAP-->
</body>
</html>