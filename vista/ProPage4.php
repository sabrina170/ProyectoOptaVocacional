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
            $_SESSION['registroEstG'][$campo] = $valor;
        }
    }
}


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

        background-image: url(../img/Fondo9.jpg);
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
    <br>
    <br>
    <br>


    <!-- <div class="card-deck">
    <div class="col-sm-3">
        <div class="card" style="margin-left:30px;" >
        <div class="card-body">
            <table class="d-flex justify-content-center">
                    <tr>
                        <td><strong>Estrategia A<strong> : </td>
                        <td>  <?php echo $_SESSION['registroEstG']['EstG1']; ?>%</td>
                    </tr>
                    
                    <tr>
                        <td><strong>Estrategia B<strong> : </td>
                        <td><?php echo $_SESSION['registroEstG']['EstG2']; ?>%</td>
                    </tr>
                    <tr>
                        <td><strong>Estrategia C<strong> : </td>
                        <td><?php echo $_SESSION['registroEstG']['EstG3']; ?>%</td>
                    </tr>   
            </table>
        </div>
        </div>
</div> -->

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
                        <br>
                        <table class="d-flex justify-content-center">
                            <tr>
                                <td><strong>Estrategia A<strong> : </td>
                                <td> <?php echo $_SESSION['registroEstG']['EstG1']; ?>%</td>
                            </tr>

                            <tr>
                                <td><strong>Estrategia B<strong> : </td>
                                <td><?php echo $_SESSION['registroEstG']['EstG2']; ?>%</td>
                            </tr>
                            <tr>
                                <td><strong>Estrategia C<strong> : </td>
                                <td><?php echo $_SESSION['registroEstG']['EstG3']; ?>%</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 40rem;">
            <div class="text-center" style="margin:10px;">
                <h3 class="card-title">Tus Posibilidades de Éxito</h3>
                <p class="card-text">Ahora que ya tienes tus estrategias, debes asignarle valores de acuerdo al sistema.</p>
                <h5 class="card-title">Pregunta guía: ¿Qué posibilidades de éxito entre 0-10 le asignarias a cada estrategia?</h5>
            </div>
            <br>
            <form method="post" action="ProPage5.php">
                <table class="d-flex justify-content-center">
                    <tr>
                        <td>Estrategia</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Estrategia A</td>
                        <td><input type='number' name="EstE1" max="10" /></td>
                    </tr>

                    <tr>
                        <td>Estrategia B</td>
                        <td><input type='number' name="EstE2" max="10" /></td>
                    </tr>
                    <tr>
                        <td>Estrategia C</td>
                        <td><input type='number' name="EstE3" max="10" /></td>
                    </tr>

                </table>
                <div class="text-right">
                    <input name="submit" type="submit" value="Siguiente" href="ProPage5.php" class="btn btn-primary">
                </div>
        </div>
        <div>
            </form>
        </div>
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