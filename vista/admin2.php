<?php session_start();
include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT * FROM datosusuario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">       
  </head>
  <style>
body {

background-image:url(../img/fondoadmin3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #66999;
}
</style>
    
  <body> 


<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">Datos Personales</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="admin.php">Credenciales <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="admin2.php">Datos Personales</a>
      <a class="nav-link" href="admin3.php">Datos Tabla</a>
      <a class="nav-link" href="admin4.php">Datos Resultados</a>
    </div>
        <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-dark my-2 my-sm-0" href="cerrar-sesion.php" >Cerrar sesión</a>
    </form>
</nav>
<br>
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-light" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>                                
                                <th>Edad</th> 
                                <th>Grado</th>   
                                <th>ID Usuario</th>  
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombres'] ?></td>
                                <td><?php echo $dat['apellidos'] ?></td>
                                <td><?php echo $dat['edad'] ?></td> 
                                <td><?php echo $dat['grado'] ?></td>    
                                <td><?php echo $dat['id_usu'] ?></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>   


 <!-- jQuery, Popper.js, Bootstrap JS -->
 <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>  
    
    <script type="text/javascript" src="main2.js"></script>  
  </body>
</html>