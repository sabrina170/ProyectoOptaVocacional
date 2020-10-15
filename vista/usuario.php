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
                class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
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

  <br>
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
</body>
</html>