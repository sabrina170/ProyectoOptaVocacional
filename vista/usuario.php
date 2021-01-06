<!DOCTYPE html>
<html lang="es">
  <head>
    <?php session_start();?>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-OptaPerú</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<style>
body {

background-image:url(../img/fondo3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #66999;
}
</style>
<body>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}

$id=$_SESSION["usuario"]["id"];
include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT  * FROM `usuarios` where id='$id'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

				<!-- <h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["id"]; ?></h1> -->
<!-- Main navigation -->


<header>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">

  <div class="container"> 

    <a class="navbar-brand" href="../Menu.php">
      <img src="../img/logo.png" height="40" alt="mdb logo">
      <img src="../img/logo2.png" alt="">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Left -->
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item">
          <strong><a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; " href="https://mdbootstrap.com/docs/jquery/" target="_blank">Nosotros</a></strong>
        
        </li>
        <li class="nav-item">
          <a class="btn btn-info" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="https://mdbootstrap.com/docs/angular/" target="_blank">Tutoriales</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-indigo" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="https://mdbootstrap.com/docs/react/" target="_blank">Noticias</a>
        </li>
      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
          <i class="fas fa-graduation-cap"></i>
          </a>
        </li> 
        <li class="nav-item">
          <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
          <i class="fas fa-bell"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect"
             target="_blank">
             <i class="fas fa-laugh"></i>
          </a>
        </li>
        <li class="nav-item">
        <a href="cerrar-sesion.php"
                class="nav-link border border-light rounded waves-effect mr-2">
                <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
            </a>
        </li>
      </ul>

    </div>

  </div>

</nav>
<!--/.Navbar-->
</header>
<!-- Main navigation -->

<!-- <div class="container" >
        <div style="text-align:center;padding:1em 0;" >
          <div style="text-align:center;padding:1em 0; " >
           Lima, Perú
            
              <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FLima" width="100%" height="90" frameborder="0" seamless></iframe>
          </div>   
        </div>
</div> -->
<section>
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="position: absolute; top: 10px; right: 20px;">
  <div class="toast-header">
    <img src="../img/logo.png" class="rounded mr-2"  width="20px" height="20px">
    <strong class="mr-auto">Notificación</strong>
    <small>Ahora</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hola, Te quedan 
  <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <!-- <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['usuario'];
                                
                                ?></td>
                                <td><?php echo $dat['email'] ?></td>
                                <td><?php echo $dat['password'] ?></td> 
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td><?php echo $dat['privilegio'] ?></td> -->
                                <td><?php $tr = $dat['fecha_registro'];?></td>
                                <td></td>
                                
                            </tr>
                            <?php

                                }
                                // echo $tr;
                                                            
//$now = new DateTime(); // current date/time

// Si estas en Lima Peru Utiliza esta declaracion
date_default_timezone_set("America/Lima"); 
$mifecha= date($tr); 
$NuevaFecha = strtotime ( '+2 hour' , strtotime ($mifecha) ) ; 
$NuevaFecha = strtotime ( '+0 minute' , $NuevaFecha ) ; 
$NuevaFecha = strtotime ( '+0 second' , $NuevaFecha ) ; 
$NuevaFecha = date ( 'Y-m-d H:i:s' , $NuevaFecha); 
// echo $NuevaFecha;

$now = new DateTime($NuevaFecha);
$ref = new DateTime();
$diff = $now->diff($ref);
// printf('%d días, %d horas, %d minutos', $diff->d, $diff->h, $diff->i);
if ($diff->h = 1) {
  printf('%d días, %d hora, %d minutos', $diff->d, $diff->h, $diff->i);
}elseif($diff->d = 1) {
  printf('%d día, %d horas, %d minutos', $diff->d, $diff->h, $diff->i);
}elseif($diff->h = 1 && $diff->d = 1) {
  printf('%d día, %d hora, %d minutos', $diff->d, $diff->h, $diff->i);
}
else{
  printf('%d días, %d horas, %d minutos', $diff->d, $diff->h, $diff->i);
}
                          
                          ?>                           
  </div>
</div>
  <br><br>
<div class="d-flex justify-content-center"> 
  <div class="card" style="width: 40rem;" >
  <br>
    <img src="../img/profe.jpg" class="card-img-top" alt="...">
      <div class="card-body">
    <form method="post" action="ProPage2.php" style="margin-left: 30px;" >      
              <div class="form-group row">
                  <label for="input" class="col-sm-2 col-form-label">Nombres</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="Nombres" placeholder="Nombres" required>
                  </div>
              </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Apellidos</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Edad</label>
              <div class="col-sm-4">
                <input type="number" class="form-control"  name="Edad" placeholder="Edad" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Grado</label>
              <div class="col-sm-8">
                <select  name="Grado" class="form-control" required>
                    <option value=""></option>
                  <option value="Estudiante 3º Secundaria">Estudiante 3º Secundaria</option>
                  <option value="Estudiante 4º Secundaria">Estudiante 4º Secundaria</option>
                  <option value="Estudiante 5º Secundaria">Estudiante 5º Secundaria</option>
                  <option value="Secundaria Completa">Secundaria Completa</option>
                  <option value="Universitario">Universitario</option>
                </select>
              </div>
            </div>
            <!-- <input name="submit" type="submit" value="Siguiente" href="pagina2.php" /> -->
            <div class="text-right" style="margin-top:10px;">
                  <input name="submit" type="submit" value="Siguiente" href="ProPage2.php" class="btn btn-primary">
           </div> 
    </form>

      </div>
  </div>
</div> 

  </section>
<br>
     


  <!--Footer-->
<footer class="page-footer text-center font-small info-color-dark" >

  <div class="rgba-stylish-strong">
    <br>

    <!-- Social icons -->
    <div class="pb-4">
      <a   href="https://www.facebook.com/OrientacionVocacionalOptaPeru/" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a   href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a  href="https://www.youtube.com/channel/UCIVz5V9xRw_jno1nq-p6KKA" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>


    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright-Todos los derechos reservados: SP
    </div>
    <!--/.Copyright-->

  </div>

</footer>
<!--Footer-->
<script>
$('.toast').toast('show');
$('#element').toast('hide');
$('#element').toast('dispose');
$('#myToast').on('hidden.bs.toast', function () {
  // do something...
});
</script>   
</body>
</html>