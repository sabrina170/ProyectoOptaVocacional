<?php

SESSION_START();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST["submit"]) {
    foreach ($_POST as $campo => $valor) {
      $_SESSION['registro'][$campo] = $valor;
    }
  }
}

$Nombres = $_SESSION['registro']['Nombres'];
$Apellidos = $_SESSION['registro']['Apellidos'];
$Edad = $_SESSION['registro']['Edad'];
$Grado = $_SESSION['registro']['Grado'];
$id_usu = $_SESSION["usuario"]["id"];

include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "INSERT INTO `datosusuario` ( `nombres`, `apellidos`, `edad`, `grado`, `id_usu`)
 VALUES ('$Nombres', '$Apellidos', '$Edad', '$Grado', '$id_usu')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();


?>
<!DOCTYPE html>
<html lang="en">

<head>

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

    background-image: url(../img/Fondo7.jpg);
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

        <a class="navbar-brand" href="../index.php">
          <img src="../img/logo.png" height="40" alt="mdb logo">
          <img src="../img/logo2.png" alt="">
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <strong><a class="btn btn-red" style="color: white; font-family: 'Franklin Gothic Medium',
               'Arial Narrow', Arial, sans-serif; " href="../Menu.php">Inicio</a></strong>

            </li>
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
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link waves-effect" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-graduation-cap"></i></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                  <small>Setember 25, 2020</small><br>
                  la nuvea noticia jajajaj
                </a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect" target="_blank">
                <i class="fas fa-laugh"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://mdbootstrap.com/docs/jquery/newsletter/" class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
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
  <br>
  <br><br>



  <div style="margin:50px;">
    <form method="post" action="ProPage3.php">
      <div class="view view-cascade gradient-card-header blue-gradient">
        <h3 class="text-center" style="color:white; "><strong>CUADRO GENERADOR DE ESTRATEGIAS</strong></h3>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-light">
          <thead class="table juicy-peach-gradient">
            <tr>
              <th scope="col">Estr</th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">1 </div><br>¿Qué carrera desea <BR>estudiar mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">2 </div><br>¿He hablado con mi<br> hijo de esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">3 </div><br>¿Qué nivel de estudio tomará mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">4 </div><br>¿En donde desea estudiar <br>mi hijo esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">5 </div><br>¿Mi hijo ha hecho <br>OV para esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">6 </div><br>¿Lo veo como para<br> estudiar esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">7 </div><br>¿Con qué ayuda cuento para la Educ. de mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">8 </div><br>¿En qué ciudad <br>podría estudiar mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">9 </div><br>¿Cuánto invertiría <br>al mes en sus estudios?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">10 </div><br>¿En que sector<br> laboral se ubicaría mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">11 </div><br>¿A que cargo o <br> puesto aspiraría mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">12 </div><br>¿Veo a mi hijo <br>trabajando en esto?
              </th>


            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">A</th>
              <td><input name="A1" class="form-control" placeholder="Ej. Ing. de Sistemas" style="width:170px" type="text" required /></td>
              <td>
                <select name="A2" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="A3" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="A4" type="text" class="form-control" placeholder="Ej. San Marcos" style="width:170px" required /></td>
              <td>
                <select name="A5" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="A6" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="A7" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="A8" type="text" class="form-control" placeholder="Ej. Lima" style="width:170px" required />
              </td>
              <td>
                <input name="A9" type="number" class="form-control" placeholder="Ej. S/350" style="width:170px" required />
              </td>
              <td>
                <select name="A10" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="A11" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="A12" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">B</th>
              <td><input name="B1" class="form-control" style="width:170px" type="text" required /></td>
              <td>
                <select name="B2" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="B3" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="B4" type="text" class="form-control" style="width:170px" required /></td>
              <td>
                <select name="B5" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="B6" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="B7" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="B8" type="text" class="form-control" style="width:170px" required />
              </td>
              <td>
                <input name="B9" type="number" class="form-control" style="width:170px" required />
              </td>
              <td>
                <select name="B10" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="B11" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="B12" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">C</th>
              <td><input name="C1" class="form-control" style="width:170px" type="text" required /></td>
              <td>
                <select name="C2" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="C3" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="C4" type="text" class="form-control" style="width:170px" required /></td>
              <td>
                <select name="C5" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="C6" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="C7" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="C8" type="text" class="form-control" style="width:170px" required />
              </td>
              <td>
                <input name="C9" type="number" class="form-control" style="width:170px" required />
              </td>
              <td>
                <select name="C10" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="C11" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="C12" class="form-control" style="width:170px" required>
                  <option value=""></option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="text-right" style="margin-top:10px;">
        <a href="ProPage1.php" type="button" class="btn btn-primary">Atras</a>
        <input name="submit" type="submit" value="Siguiente" href="ProPage3.php" class="btn btn-primary">
      </div>
    </form>
  </div>

  <!--Footer-->
  <footer class="page-footer text-center font-small info-color-dark">

    <div class="rgba-stylish-strong">
      <br>

      <!-- Social icons -->
      <div class="pb-4">
        <a href="https://www.facebook.com/OrientacionVocacionalOptaPeru/" target="_blank">
          <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
          <i class="fab fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/channel/UCIVz5V9xRw_jno1nq-p6KKA" target="_blank">
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