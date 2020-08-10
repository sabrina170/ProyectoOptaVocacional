
<?php session_start();
include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    
?>
 
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
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
<a class="navbar-brand" href="#">Administrador</a>
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
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>     
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-light"style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>Email</th>                                
                                <th>Contraseña</th> 
                                <th>Telefono</th>   
                                <th>Privilegio</th>  
                                <th>Fecha Registro</th>   
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['usuario'] ?></td>
                                <td><?php echo $dat['email'] ?></td>
                                <td><?php echo $dat['password'] ?></td> 
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td><?php echo $dat['privilegio'] ?></td>
                                <td><?php echo $dat['fecha_registro'] ?></td>
                                <td></td>
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
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                    <label for="username" class="col-form-label">usuario:</label>
                    <input type="text" class="form-control" id="usuario">
                </div>
                <div class="form-group">          
                    <label for="gmail" class="col-form-label">Gmail:</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="text" class="form-control" id="password">
                </div>  
               
                <div class="form-group">  
                    <label for="gmail" class="col-form-label">Telefono:</label>
                    <input type="number" class="form-control" id="telefono">
                </div>
                <div class="form-group">
                    <label for="id_rol" class="col-form-label">Rol:</label>
                    <select name="privilegio" id="privilegio" class="form-control">
                                            <option value="">Rol</option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>
                    </select> 
                </div>                
                          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  


      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>