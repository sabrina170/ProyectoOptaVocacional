<?php session_start();
include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>-OptaPerú</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

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
  body {

    background-image: url(../img/FondoAdmin3.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #66999;
  }
</style>

<body>

  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark lighten-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="navbar-brand" href="#">
            Administrador
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php"><strong>Credenciales</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin2.php">Datos Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin3.php">Datos Tabla</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin4.php">Datos Resultados</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item avatar" style="margin-right: 20px;">
          <a class="nav-link p-0" href="#">
            <img src="../img/perfil.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
          </a>

        </li>

        <li class="nav-item">
          <a href="cerrar-sesion.php" class="nav-link border border-light rounded waves-effect mr-2">
            <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
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
          <table id="tablaPersonas" class="table table-light" style="width:100%">
            <thead class="text-center">
              <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Telefono</th>
                <th>Privilegio</th>
                <th>Fecha Registro</th>
                <th>Docs</th>
                <th>Acciones</th>


              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $dat) {
              ?>
                <tr>
                  <td><?php echo $dat['id'] ?></td>
                  <td><?php echo $dat['usuario'] ?></td>
                  <td><?php echo $dat['email'] ?></td>
                  <td><?php echo $dat['password'] ?></td>
                  <td><?php echo $dat['telefono'] ?></td>
                  <td><?php echo $dat['privilegio'] ?></td>
                  <td><?php echo $dat['fecha_registro'] ?></td>
                  <td><a href="admin2.php?id=<?php echo $dat['id'] ?>"><i class="far fa-sticky-note fa-2x"></i></a></td>
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