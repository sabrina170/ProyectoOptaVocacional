<?php

SESSION_START();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST["submit"]) {
        foreach ($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
    }

    if ($_POST["submit"]) {
        foreach ($_POST as $campo => $valor) {
            $_SESSION['registroTabla'][$campo] = $valor;
        }
    }
}

$EsA = 'A';
$Pre1A = $_SESSION['registroTabla']['A1'];
$Pre2A = $_SESSION['registroTabla']['A2'];
$Pre3A = $_SESSION['registroTabla']['A3'];
$Pre4A = $_SESSION['registroTabla']['A4'];
$Pre5A = $_SESSION['registroTabla']['A5'];
$Pre6A = $_SESSION['registroTabla']['A6'];
$Pre7A = $_SESSION['registroTabla']['A7'];
$Pre8A = $_SESSION['registroTabla']['A8'];
$Pre9A = $_SESSION['registroTabla']['A9'];
$Pre10A = $_SESSION['registroTabla']['A10'];
$Pre11A = $_SESSION['registroTabla']['A11'];
$Pre12A = $_SESSION['registroTabla']['A12'];

$EsB = 'B';
$Pre1B = $_SESSION['registroTabla']['B1'];
$Pre2B = $_SESSION['registroTabla']['B2'];
$Pre3B = $_SESSION['registroTabla']['B3'];
$Pre4B = $_SESSION['registroTabla']['B4'];
$Pre5B = $_SESSION['registroTabla']['B5'];
$Pre6B = $_SESSION['registroTabla']['B6'];
$Pre7B = $_SESSION['registroTabla']['B7'];
$Pre8B = $_SESSION['registroTabla']['B8'];
$Pre9B = $_SESSION['registroTabla']['B9'];
$Pre10B = $_SESSION['registroTabla']['B10'];
$Pre11B = $_SESSION['registroTabla']['B11'];
$Pre12B = $_SESSION['registroTabla']['B12'];

$EsC = 'C';
$Pre1C = $_SESSION['registroTabla']['C1'];
$Pre2C = $_SESSION['registroTabla']['C2'];
$Pre3C = $_SESSION['registroTabla']['C3'];
$Pre4C = $_SESSION['registroTabla']['C4'];
$Pre5C = $_SESSION['registroTabla']['C5'];
$Pre6C = $_SESSION['registroTabla']['C6'];
$Pre7C = $_SESSION['registroTabla']['C7'];
$Pre8C = $_SESSION['registroTabla']['C8'];
$Pre9C = $_SESSION['registroTabla']['C9'];
$Pre10C = $_SESSION['registroTabla']['C10'];
$Pre11C = $_SESSION['registroTabla']['C11'];
$Pre12C = $_SESSION['registroTabla']['C12'];

$id_usu = $_SESSION["usuario"]["id"];

include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "INSERT INTO `datostabla` ( `Estrategia`, `Pre1`,
 `Pre2`, `Pre3`, `Pre4`, `Pre5`, `Pre6`, `Pre7`, `Pre8`, `Pre9`,
  `Pre10`, `Pre11`, `Pre12`, `id_dusu`)
   VALUES ('$EsA', '$Pre1A', '$Pre2A', '$Pre3A', '$Pre4A', '$Pre5A', '$Pre6A', '$Pre7A', '$Pre8A',
   '$Pre9A', '$Pre10A', '$Pre11A', '$Pre12A', '$id_usu'),
   ('$EsB','$Pre1B', '$Pre2B', '$Pre3B', '$Pre4B', '$Pre5B', '$Pre6B', '$Pre7B', '$Pre8B',
   '$Pre9B', '$Pre10B', '$Pre11B', '$Pre12B', '$id_usu'),
   ('$EsC', '$Pre1C', '$Pre2C', '$Pre3C', '$Pre4C', '$Pre5C', '$Pre6C', '$Pre7C', '$Pre8C',
   '$Pre9C', '$Pre10C', '$Pre11C', '$Pre12C', '$id_usu')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

?>
<html>

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

        background-image: url(../img/Eleccion.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
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

    <br>




    <section>
        <div class="d-flex justify-content-center">
            <div class="shadow-lg p-3 mb-5 blue-gradient-rgba" style="width: 20rem;">

                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                    <!--Content-->
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header">
                            <img src="../img/user.jpg" alt="avatar" class="rounded-circle img-responsive">
                        </div>
                        <!--Body-->
                        <div class="modal-body text-center mb-1">

                            <h5 class="mt-1 mb-2"><?php echo $_SESSION['registro']['Nombres']; ?></h5>

                        </div>

                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 40rem;">
                <div class="text-center" style="margin:10px;">
                    <h3 class="card-title">Tu Posibilidades de Elección</h3>
                    <p class="card-text">Puedes escoger una o mas estrategias de tal manera que la suma debe ser 100.</p>
                    <h5 class="card-title">Pregunta guia: ¿Que posibilidad hay que elijas la estrategia "x".?</h5>
                </div>
                <br>
                <form method="post" action="ProPage4.php" onsubmit="return validar();">
                    <table class="d-flex justify-content-center">
                        <tr>
                            <td>Estrategia </td>
                            <td>%</td>
                        </tr>
                        <tr>
                            <td>Estrategia A </td>
                            <td><input type='number' name="EstG1" class='price' />%</td>
                        </tr>
                        <tr>
                            <td>Estrategia B </td>
                            <td><input type='number' name="EstG2" class='price' />%</td>
                        </tr>
                        <tr>
                            <td>Estrategia C </td>
                            <td><input type='number' name="EstG3" class='price' />%</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type='number' name="EstGT" id='totalPrice' disabled></td>
                        </tr>
                    </table>
                    <div class="text-right" style="margin:10px;">
                        <input name="submit" type="submit" value="Siguiente" class="btn btn-primary">
                        <div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

    <script>
        $('.price').keyup(function() {
            var sum = 0;
            $('.price').each(function() {
                sum += Number($(this).val());
            });
            $('#totalPrice').val(sum);

        });

        function validar() {
            var ok = true;
            if (document.getElementById("totalPrice").value == 100) {} else {
                alert("EL TOTAL DEBE SER 100");
                ok = false;
            }
            return ok;
        }
    </script>
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