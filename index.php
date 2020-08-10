<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
body {

background-image:url(img/fondoinicial2.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #66999;
}
</style>
<body>

    <nav class="navbar navbar-dark" style="background-color: #064D72;">
    <a class="navbar-brand" href="index.php">Orientación Vocavional</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="#">NOSOTROS <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">TUTORIALES</a>
    </div>
  </div>
    </nav>

<div class="container" style="margin-top: 100px;">
      <div class="card-group">
        <div class="card">
          <img src="img/fo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          
            <a href="vista/VistaPago.php" class="btn btn-primary">Mide tus posibilidades de exito</a>
          </div>
        </div>
        <div class="card">
          <img src="img/foto2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Mide que tan seguro estas.</button>
          </div>
        </div>
        <div class="card">
          <img src="img/foto3.jpg" class="card-img-top" width="30px;" height="210px;">
          <div class="card-body">
           
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Imformate sobre tu carrera o profesion.</button>
          </div>
        </div>
      </div>
</div>

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
                            <img src="img/arreglo.jpg" class="card-img"  height="150px;" alt="...">
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
                            <img src="img/arreglo2.jpg" class="card-img"  height="150px;" alt="...">
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
</body>
</html>