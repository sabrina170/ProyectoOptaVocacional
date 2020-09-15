<?php

SESSION_START();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
      }
    
       if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
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
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>
    <style>
body {

background-image:url(../img/fondousu4.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #66999;
}
</style>
<body>
<nav class="navbar navbar-dark" style="background-color: #064D72;">
	<a class="navbar-brand" href="#">Logo</a>
 <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-warning my-2 my-sm-0" href="cerrar-sesion.php" >Cerrar sesión</a>
 </form>
</nav>

<br>

<div class="d-flex justify-content-center">
    <div class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 40rem; background-color:#F9FAFA;">
            <nav class="nav">
                <img src="../img/user2.png" width="50" height="40" alt="" loading="lazy" style="margin-right:10px;">
                <h5 style="margin-top:7px;"> <?php  echo $_SESSION['registro']['Apellidos'];?>  <?php  echo $_SESSION['registro']['Nombres'];?></h5>
            </nav>
   
    </div>
</div>

<div class="card-deck">>
    <div class="col-sm-3">
        <div class="card" style="margin-left:30px;" >
        <div class="card-body">
            <table class="d-flex justify-content-center">
                    <tr>
                        <td><strong>Estrategia 1<strong> : </td>
                        <td>  <?php  echo $_SESSION['registroEstG']['EstG1'];?>%</td>
                    </tr>
                    
                    <tr>
                        <td><strong>Estrategia 2<strong> : </td>
                        <td><?php  echo $_SESSION['registroEstG']['EstG2'];?>%</td>
                    </tr>
                    <tr>
                        <td><strong>Estrategia 3<strong> : </td>
                        <td><?php  echo $_SESSION['registroEstG']['EstG3'];?>%</td>
                    </tr>   
            </table>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card" style="max-width: 40rem;margin-left:10px;">
        <div class="card-body">
                    <div class="text-center" style="margin:10px;">
                        <h3 class="card-title">Tu Posibilidades de Exito</h3>
                        <p class="card-text">Ahora que ya tienes tus estrategias, debes asignarle valores de acuerdo al sistema.</p>
                        <h5 class="card-title">Pregunta guia: ¿Qué posibilidades de exito entre 0-10 le asignarias a cada estrategia?</h5>
                    </div>
                    <br>
                    <form method="post" action="ProPage5.php" >
                        <table class="d-flex justify-content-center">
                            <tr>
                                <td>Estrategia</td>
                                <td>%</td>
                            </tr>
                            
                            <tr>
                                <td>Estrategia 1</td>
                                <td><input type='number' name="EstE1" max="10" />%</td>
                            </tr>
                            
                            <tr>
                                <td>Estrategia 2</td>
                                <td><input type='number' name="EstE2" max="10" />%</td>
                            </tr>
                            <tr>
                                <td>Estrategia 3</td>
                                <td><input type='number' name="EstE3" max="10" />%</td>
                            </tr>
                            
                        </table>
                        <div >
                            <div >
                                <div class="text-right" >
                                    <input name="submit" type="submit" value="Siguiente" href="ProPage5.php" class="btn btn-outline-primary">         
                                </div>
                            </div>
                        <div>
                    </form>      
        </div>
        </div>
    </div>
</div>

</body>
</html>