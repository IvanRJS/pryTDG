<!DOCTYPE html>
<?php if(!isset($_SESSION)){
    session_start();
}
#Barra de navegacion si está logeado
if(isset($_SESSION['usuario'])){
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="../index.php">Inicio</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="vista/Estudiante.php">Estudiantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="vista/Persona.php">Personas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="vista/Proyecto.php">Proyecto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="vista/Cofinanciador.php">Cofinanciador</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link " href="vista/CerrarSesion.php">Cerrar sesión</a>
        </li>
        </ul>
   </div>
</nav>

<?php 
#barra de navegacion si no está logeado
} else { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">pryTDG</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link mr-auto" href="vista/Login.php">Login</a>
        </li>
    </ul>
</div>
</nav>

<?php  } ?>
