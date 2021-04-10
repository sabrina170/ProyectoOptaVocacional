<?php session_start();
include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$id = $_REQUEST['id'];

$consulta = "SELECT * FROM datosusuario where id_usu='$id'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>-OptaPerú</title>
  <link rel="shortcut icon" href="img/logo.png" />
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
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
        <li class="nav-item avatar">
          <a class="nav-link p-0" href="#">
            <img src="../img/perfil.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
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
        <div class="table-responsive">
          <table id="example" class="table table-light" style="width:100%">
            <thead class="text-center">
              <tr>
                <th>N°</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Grado</th>
                <!-- <th>ID</th> -->
                <th>Acción</th>


              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $dat) {
              ?>
                <tr>
                  <td><?php echo $dat['id_usu'] ?></td>
                  <td><?php echo $dat['nombres'] ?></td>
                  <td><?php echo $dat['apellidos'] ?></td>
                  <td><?php echo $dat['edad'] ?></td>
                  <td><?php echo $dat['grado'] ?></td>
                  <!-- <td><?php echo $dat['id_usu'] ?></td> -->
                  <td><a href="admin3.php?id_usu=<?php echo $dat['id_usu'] ?>"><i class="far fa-sticky-note fa-2x"></i></a></td>

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