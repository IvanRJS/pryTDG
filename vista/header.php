<!DOCTYPE html>
<?php session_start();
#Barra de navegacion si está logeado
if(isset($_SESSION['usuario'])){
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Estudiantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Personas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Proyecto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cofinanciador</a>
        </li>
    </ul>
</div>
</nav>

<?php 
#barra de navegacion si no está logeado
} else { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="../index.php">Home</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link mr-auto" href="#">Login</a>
        </li>
    </ul>
</div>
</nav>

<?php  } ?>
