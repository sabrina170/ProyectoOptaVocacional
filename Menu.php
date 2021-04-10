<!DOCTYPE html>
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

    background-image: url(img/fondo.jpg);
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

        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" height="40" alt="mdb logo">
          <img src="img/logo2.png" alt="">
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
               'Arial Narrow', Arial, sans-serif; " href="Menu.php">Inicio</a></strong>

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
  <section>




    <div class="container">
      <!-- Card deck -->
      <div class="card-deck">

        <!-- Card -->
        <div class="card mb-4">

          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top" src="img/img3.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body">

            <!--Title-->
            <h5 class="card-title" style="font-family: cursive; color: #398291;">DECIDIENDO</h5>
            <!--Text-->
            <p class="card-text">
              Para diseñar estrategias vocacionales <br>
              La mejor manera para elejir y decidir !!</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="vista/VistaPago.php" class="btn btn-light-blue btn-md">Ingresar</i></a>

          </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4">

          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top" src="img/img1.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body">

            <!--Title-->
            <h5 class="card-title" style="font-family: cursive; color: #aa294f;">ESCOGIENDO</h5>
            <!--Text-->
            <p class="card-text">
              ¿Su hijo “sabe” lo que está escogiendo? ¿Esta seguro?
              Invítelo a resolver su cuestionario !!
            </p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#exampleModal">Ingresar</button>

          </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4">

          <!--Card image-->
          <div class="view overlay">
            <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!--Card content-->
          <div class="card-body">

            <!--Title-->
            <h5 class="card-title" style="font-family: cursive; color: #225992;">APRENDIENDO</h5>
            <!--Text-->
            <p class="card-text">
              Para que su hijo sepa a lo que se enfrenta, sepa de “esa” carrera, arte, oficio u ocupación que está pensando. Dele información !!</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#exampleModal2">Ingresar</button>

          </div>

        </div>
        <!-- Card -->

      </div>
      <!-- Card deck -->
    </div>

  </section>


  <br>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mide que tan seguro estas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/arreglo.jpg" class="card-img" height="150px;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Tests de Inteligencias</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Muy pronto...</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imformate sobre tu carrera o profesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/arreglo2.jpg" class="card-img" height="150px;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Documentos</h5>
                  <p class="card-text">Cientos de documentos con imformación precisa sobre la carrera que elegiras !!.</p>
                  <p class="card-text"><small class="text-muted">Muy pronto...</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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