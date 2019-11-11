<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>pryTDG</title>
</head>
<body>
    <?php 
    if(!isset($_SESSION)){
        session_start();
    }
    include("vista/header.php"); ?>
    <?php if(isset($_SESSION['usuario'])){ ?>
      
        <h1 class="text-center mt-5 title-orange">¡ Hola <?php echo $_SESSION['usuario']; ?> ! <br>Bienvenido al proyecto TDG</h1>


    <?php }else{ ?>

        <h1 class="text-center mt-5 title-orange">Proyecto TDG</h1>
    <div class="login-form">
    <form action="vista/ValidarLogin.php" method="post">
        <h2 class="text-center title-orange">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="user" id="user"  placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block btn-orange btn-login">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
   
</div>
    <?php } ?>
    
   

<script src="js/scripts.js"></script>
</body>
<!-- Footer -->
<footer class="page-footer font-small fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Instituto Tecnológico Metropolitano.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>