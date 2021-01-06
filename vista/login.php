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
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
  <style>
body {

background-image:url(../img/FondoLogin.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #66999;
}
</style>
<body>

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
          <a href="https://mdbootstrap.com/docs/jquery/newsletter/"
             class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
            <i class="fas fa-envelope mr-1"></i>DavidHuere
          </a>
        </li>
      </ul>

    </div>

  </div>

</nav>
<!--/.Navbar-->
</header>
<!-- Main navigation -->

<section>
  <br><br>
<div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 700px;">
      <div class="row no-gutters">
        
        <div class="col-md-6">
          <div class="card-body">
            <form id="loginForm" action="validarCode.php" method="POST" role="form" style="margin:50px;">
								<h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Iniciar sesión</h4>

								<div class="form-group">
									<label for="usuario">Usuario</label>
									<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario123">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="*********">
								</div>

								<button type="submit" class="btn btn-primary" style="border-radius: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Ingresar</button>
			</form>
          </div>
        </div>

        <div class="col-md-6">
          <br>
          <img src="../img/login.jpg" class="card-img" alt="...">
        </div>
      </div>
    </div>
</div>
</section>
<br><br>
    
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>

  </body>
</html>