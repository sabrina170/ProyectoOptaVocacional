<!DOCTYPE html>
<html lang="es">
  <head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mide tu probabilidad</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<style>
body {

background-image:url(../img/fondocli3.jpg);
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
	
<nav class="navbar navbar-dark" style="background-color: #064D72;">
	<a class="navbar-brand" href="#">Logo</a>
 <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-warning my-2 my-sm-0" href="cerrar-sesion.php" >Cerrar sesión</a>
    </form>
   
</nav>

      <div class="container">
        <div style="text-align:center;padding:1em 0;" >
          <div style="text-align:center;padding:1em 0;" >
           Lima, Perú
            
              <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FLima" width="100%" height="90" frameborder="0" seamless></iframe>
          </div>   
        </div>
      </div>

	  
	  <div class="container">
	  <div class="card border-warning mb-3"  style="max-width: 38rem;" >
        <form method="post" action="ProPage2.php" style="margin: 30px;"  >      
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="Nombres" placeholder="Nombres" required>
                </div>
            </div>

          <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-9">
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
          <div class="button-next">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <input name="submit" type="submit" value="Siguiente" href="ProPage2.php" class="btn btn-outline-primary">
              </div>
            </div>
          </div>
		  
        </form>
        </div>
 </div>
</body>
</html>