

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>
    <title>-OptaPerú</title>
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>


#video_background {
 position: absolute;
 bottom: 0px;
 right: 0px;
 min-width: 100%;
 min-height: 100%;
 width: auto;
 height: auto;
 z-index: -1000;
 overflow: hidden;
 }
 #video_pattern {
 background:#fff;
 position: fixed;
 opacity: 0.8;
 left: 0px;
 top: 0px;
 width: 100%;
 height: 100%;
 z-index: 1;
 }
 
</style>
<body>
    <video onloadedmetadata="this.muted=true" autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
    <source src="Video/FondoProfesiones.mp4" type="video/mp4" />
    </video/>
  <br><br>
    <div class="d-flex justify-content-center" >
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 40rem; ">
            <div class="text-center" style="margin:10px; ">
            <h2 class="card-title" style="font-family: cursive;">"BIENVENIDOS"</h3>
             </div>
        </div>
    </div>

    <br>
    <div class="d-flex justify-content-center">
        <div class="shadow-lg p-4 mb-5 bg-white rounded" style="max-width: 40rem">
            <form  action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombres</label>
                    <input name="nombre" data-required="true" type="text" style="width:270px" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Correo</label>
                    <input name="correo"  type="text" class="form-control" required>
                </div>
               
                <button name="submit" type="submit"  class="btn btn-primary btn-lg btn-block">Entrar</button>
            </form>
        </div>
    </div>
    <br><br>
    <?php
     include_once 'datos/Conexion.php';
     $objeto = new Conexion();
     $conexion = $objeto->conectar();

    if (isset($_POST['submit'])){
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
    
$consulta = "INSERT INTO `UsuarioPublico`(`nombre`, `correo`) VALUES ('$nombre', '$correo')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$result = $resultado->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    header("Location:Menu.php");
} else {
    
}
}
?>

<!--Footer-->
<footer class="page-footer text-center font-small info-color-dark" style="margin-bottom: 0px;" >

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


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
</html>