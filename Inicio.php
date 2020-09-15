

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
  <br>
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
<div class="footer fixed-bottom" style="background-color: #F4E93D;">
    <div class="d-flex justify-content-center">
        <div style="margin: 10px;">
        SÍGUENOS EN REDES
        <a href="https://www.youtube.com/channel/UCIVz5V9xRw_jno1nq-p6KKA" target="_blank"><i class="fab fa-youtube-square fa-2x fa-lg" style="color:#666;"  ></i></a>
        <a href="https://www.facebook.com/OrientacionVocacionalOptaPeru/" target="_blank"><i class="fab fa-facebook-square fa-2x fa-lg" style="color:#666;" ></i></a>  
        <a href=""><i class="fab fa-twitter-square fa-2x fa-lg" style="color:#666;" ></i></a>  
        </div>
   
    </div>
    <div class="d-flex justify-content-center"  >
   <p> Copyright 2020 Orientación Vocacional Opta Perú . Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>