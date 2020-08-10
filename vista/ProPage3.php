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
          $_SESSION['registroTabla'][$campo] = $valor;
      }
    }
}

$EsA='A';
$Pre1A=$_SESSION['registroTabla']['A1'];
$Pre2A=$_SESSION['registroTabla']['A2'];
$Pre3A=$_SESSION['registroTabla']['A3'];
$Pre4A=$_SESSION['registroTabla']['A4'];
$Pre5A=$_SESSION['registroTabla']['A5'];
$Pre6A=$_SESSION['registroTabla']['A6'];
$Pre7A=$_SESSION['registroTabla']['A7'];
$Pre8A=$_SESSION['registroTabla']['A8'];
$Pre9A=$_SESSION['registroTabla']['A9'];
$Pre10A=$_SESSION['registroTabla']['A10'];
$Pre11A=$_SESSION['registroTabla']['A11'];
$Pre12A=$_SESSION['registroTabla']['A12'];

$EsB='B';
$Pre1B=$_SESSION['registroTabla']['B1'];
$Pre2B=$_SESSION['registroTabla']['B2'];
$Pre3B=$_SESSION['registroTabla']['B3'];
$Pre4B=$_SESSION['registroTabla']['B4'];
$Pre5B=$_SESSION['registroTabla']['B5'];
$Pre6B=$_SESSION['registroTabla']['B6'];
$Pre7B=$_SESSION['registroTabla']['B7'];
$Pre8B=$_SESSION['registroTabla']['B8'];
$Pre9B=$_SESSION['registroTabla']['B9'];
$Pre10B=$_SESSION['registroTabla']['B10'];
$Pre11B=$_SESSION['registroTabla']['B11'];
$Pre12B=$_SESSION['registroTabla']['B12'];

$EsC='C';
$Pre1C=$_SESSION['registroTabla']['C1'];
$Pre2C=$_SESSION['registroTabla']['C2'];
$Pre3C=$_SESSION['registroTabla']['C3'];
$Pre4C=$_SESSION['registroTabla']['C4'];
$Pre5C=$_SESSION['registroTabla']['C5'];
$Pre6C=$_SESSION['registroTabla']['C6'];
$Pre7C=$_SESSION['registroTabla']['C7'];
$Pre8C=$_SESSION['registroTabla']['C8'];
$Pre9C=$_SESSION['registroTabla']['C9'];
$Pre10C=$_SESSION['registroTabla']['C10'];
$Pre11C=$_SESSION['registroTabla']['C11'];
$Pre12C=$_SESSION['registroTabla']['C12'];

$id_usu=$_SESSION["usuario"]["id"];

include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "INSERT INTO `datostabla` ( `Estrategia`, `Pre1`,
 `Pre2`, `Pre3`, `Pre4`, `Pre5`, `Pre6`, `Pre7`, `Pre8`, `Pre9`,
  `Pre10`, `Pre11`, `Pre12`, `id_usu`)
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
        <title>Nostros</title>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>
    <style>
body {

background-image:url(../img/fondousu22.jpg);
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


    <div class="card mb-3" style="max-width: 340px;">
        <div class="row no-gutters">
              <div class="col-md-4">
                <img src="../img/user.png" class="card-img" width="50px;" height="100px;">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                      <div class="text-left"><strong>NOMBRE:</strong>
                        <?php  echo $_SESSION['registro']['Apellidos'];?>
                        <?php  echo $_SESSION['registro']['Nombres'];?>
                      </div>
                      <div class="text-left"><strong>EDAD:</strong> 
                      <?php  echo $_SESSION['registro']['Edad'];?> Años
                      </div> 
                  </div>
              </div>
        </div>
    </div>
<div class="d-flex justify-content-center" >
<div class="card border-primary mb-3" style="max-width: 40rem;">
<div class="text-center" style="margin:10px;">
      <h3 class="card-title">Tu Posibilidades de Elección</h3>
      <p class="card-text">Puedes escoger una o mas estrategias de tal manera que la suma debe ser 100.</p>
      <h5 class="card-title">Pregunta guia: ¿Que posibilidad hay que elijas la estrategia "x".?</h5>
</div>
<br>
    <form method="post" action="ProPage4.php" onsubmit="return validar();">
        <table class="d-flex justify-content-center">
            <tr>
                <td>Estrategia</td>
                <td>%</td>
            </tr> 
            <tr>
                <td>Estrategia 1</td>
                <td><input type='number' name="EstG1" class='price'  />%</td>
            </tr>
            <tr>
                <td>Estrategia 2</td>
                <td><input type='number' name="EstG2" class='price' />%</td>
            </tr>
            <tr>
                <td>Estrategia 3</td>
                <td><input type='number' name="EstG3" class='price' />%</td>
            </tr>
            <tr>
                <td></td>
              <td><input type='number' name="EstGT" id='totalPrice' disabled ></td>
            </tr>
        </table>
        <div class="text-right" style="margin:10px;">
                    <input name="submit" type="submit" value="Siguiente" class="btn btn-outline-primary">    
        <div>
    </form>
  
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
 
<script>
  $('.price').keyup(function () 
  {
        var sum = 0;
        $('.price').each(function() 
          {
              sum += Number($(this).val());
          }
        );
        $('#totalPrice').val(sum);
      
  });

function validar()
{
  var ok = true;
  if( document.getElementById("totalPrice").value == 100 )
  {
  }
  else 
    {
    alert("EL TOTAL DEBE SER 100");
    ok = false;
    }
  return ok;               
}

</script>
</body>
</html>