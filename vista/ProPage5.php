<?php

SESSION_START();

if($_SERVER['REQUEST_METHOD']=='POST'){
  
      if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registroTabla'][$campo] = $valor;
        }
      }

      if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
      }

      if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registroEstE'][$campo] = $valor;
      }
      }

      if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registroEstG'][$campo] = $valor;
      }
      }
}


 $EG1=$_SESSION['registroEstG']['EstG1'];
 $EG2=$_SESSION['registroEstG']['EstG2'];
 $EG3=$_SESSION['registroEstG']['EstG3'];

 $EE1=$_SESSION['registroEstE']['EstE1'];
 $EE2=$_SESSION['registroEstE']['EstE2'];
 $EE3=$_SESSION['registroEstE']['EstE3'];

 $FE1=($EG1/100)*($EE1/10);
 $FF1=($EG1/100)  *  ((10-$EE1)/10);

 $FE2=($EG2/100)*($EE2/10);
 $FF2=($EG2/100)  *  ((10-$EE2)/10);

 $FE3=($EG3/100)*($EE3/10);
 $FF3=($EG3/100)  *  ((10-$EE3)/10);

 $TotalExito=$FE1+$FE2+$FE3;
 $TotalFracaso=$FF1+$FF2+$FF3;

 $NFE1=ROUND(($FE1/$TotalExito)*100);
 $NFF1=ROUND(($FF1/$TotalFracaso)*100);

 $NFE2=ROUND(($FE2/$TotalExito)*100);
 $NFF2=ROUND(($FF2/$TotalFracaso)*100);

 $NFE3=ROUND(($FE3/$TotalExito)*100);
 $NFF3=ROUND(($FF3/$TotalFracaso)*100);

 $id_usu=$_SESSION["usuario"]["id"];

 $EsA='A';
 $EsB='B';
 $EsC='C';

include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "INSERT INTO `resultados` (`Estrategia`, `Exito`, `Fracaso`, `id_usu`)
 VALUES ('$EsA', '$NFE1', '$NFF1', '$id_usu'),
 ('$EsB', '$NFE2', '$NFF2', '$id_usu'),
 ('$EsC', '$NFE3', '$NFF3', '$id_usu')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//la hora en tiempo real
  $time =  time();
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
   
<body>
<!-- Main navigation -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light">

    <div class="container"> 

        <a class="navbar-brand" href="../Menu.php">
        <img src="../img/logo.png" height="40" alt="mdb logo">
        <img src="../img/logo2.png" alt="">
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Left -->
        <ul class="navbar-nav mr-auto" >
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
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
            <i class="fas fa-graduation-cap"></i>
            </a>
            </li> 
            <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
            <i class="fas fa-bell"></i>
            </a>
            </li>
            <li class="nav-item">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect"
                target="_blank">
                <i class="fas fa-laugh"></i>
            </a>
            </li>
            <li class="nav-item">
            <a href="cerrar-sesion.php"
                class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
                <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
            </a>
            </li>
        </ul>

        </div>

    </div>

    </nav>
</header>
<!-- Main navigation -->

<div id="content">

        <hr style="height:5px; background-color:darkred;"></hr>

          <div class="container">
              <p class="text-center"><strong>RESULTADOS OBTENIDOS A PARTIR DE SUS ESTRATEGIAS </strong></p>
              <p class="text-center"><strong>VOCACIONALES Y VALORES ASIGNADOS</strong></p>

                        <div class="text-left"><strong>NOMBRE:</strong> <?php  echo $_SESSION['registro']['Apellidos'];?> <?php  echo $_SESSION['registro']['Nombres'];?></div>
                        <div class="text-left"><strong>EDAD:</strong> <?php  echo $_SESSION['registro']['Edad'];?> Años</div>
                        <div class="text-left"><strong>GRADO DE INSTRUCCIÓN:</strong> <?php  echo $_SESSION['registro']['Grado'];?> </div>
                        <div class="text-left"><strong>FECHA DE EVALUCIÓN:</strong> <?php echo date("d", $time)?> de <?php echo date("M", $time)?> del <?php echo date("Y", $time)?></div>

              <p class="text-center"><strong>CONSOLIDADOS</strong></p>
              <!-- <p class="text-center">Habiéndose realizado las fases evaluativa y de información correspondiente, la familia y la evaluada desarrollaron las siguientes 3 estrategias.</p> -->
              <div class="text-left"><strong> I.- SUS ESTRATEGIAS:</strong></div>
              <br> 
            

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ITEMS ANALIZADOS</th>
                    <th scope="col">Estrategia A</th>
                    <th scope="col">Estrategia B</th>
                    <th scope="col">Estrategia C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">¿Qué carrera desea estudiar mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A1'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B1'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C1'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿He hablado con mi hijo de esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A2'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B2'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C2'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Qué nivel de estudios tomará mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A3'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B3'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C3'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En dónde desea estudiar mi hijo esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A4'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B4'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C4'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Mi hijo ha hecho OV para esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A5'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B5'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C5'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Lo veo como para estudiar esta carrera?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A6'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B6'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C6'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Con qué ayuda cuento para la educación de mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A7'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B7'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C7'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En qué ciudad podría vivir mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A8'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B8'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C8'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Cuánto invertiría al mes en sus estudios?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A9'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B9'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C9'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿En qué sector laboral se ubicaría mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A10'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B10'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C10'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿A qué cargo o puesto podría aspirar mi hijo?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A11'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B11'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C11'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">¿Veo a mi hijo trabajando en esto?</th>
                    <td><?php  echo $_SESSION['registroTabla']['A12'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['B12'];?></td>
                    <td><?php  echo $_SESSION['registroTabla']['C12'];?></td>
                  </tr>
                </tbody>
              </table>
                <br>
                <BR>
                <div class="text-left"><strong> II.- ASIGNACIONES DE CRITERIOS ELECTIVOS :</strong>
                La evaluada y su familia asignan los siguientes valores para cada estrategia.</div>
                <BR>
                <BR>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ESTRATEGIAS</th>
                    <th scope="col" class="text-center">ASIGNACIÓN ELECTIVA</th>
                    <th scope="col" class="text-center">ESTIMADO EXITO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center">A</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG1'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE1'];?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">B</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG2'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE2'];?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">C</th>
                      <td class="text-center"><?php  echo $_SESSION['registroEstG']['EstG3'];?></td>
                      <td class="text-center"><?php  echo $_SESSION['registroEstE']['EstE3'];?></td>
                  </tr>
                  
                </tbody>
              </table>

              <br>
                <BR>
                <div class="text-left"><strong> III.- INDICADORES DE ÉXITO Y FRACASO POR ESTRATEGIA :</strong>
                De acuerdo a las asignaciones establecidas, el aplicativo “Decide” determinó los 
                  siguientes indicadores para cada estrategia.</div>
                <BR>
                <BR>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ESTRATEGIAS</th>
                    <th scope="col" class="text-center">INDICADOR POSITIVO</th>
                    <th scope="col" class="text-center">INDICADOR DESFAVORABLE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center">A</th>
                      <td class="text-center"><?php echo $NFE1?></td>
                      <td class="text-center"><?php echo $NFF1?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">B</th>
                      <td class="text-center"><?php echo $NFE2?></td>
                      <td class="text-center"><?php echo $NFF2?></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center">C</th>
                      <td class="text-center"><?php echo $NFE3?></td>
                      <td class="text-center"><?php echo $NFF3?></td>
                  </tr>
                  
                </tbody>
              </table>
            
              <br>
                <BR>
                <div class="text-left"><strong> IV.- CONCLUSIONES :</strong></div>
                <BR>
                <P class="text-justify">Los indicadores obtenidos se refieren a los estimados actuales del evaluado y
                su familia, son referenciales y no deben considerarse como determinantes ni absolutos
                  y pueden estar sujetos a sucesos  inesperados o cambios en los ítems establecidos
                  y analizados así como la falta de coherencia o veracidad en la información tomada en cuenta.</P>
                <BR>
                <?php echo date("d", $time)?> de <?php echo date("M", $time)?> del <?php echo date("Y", $time)?>
                <BR>
                
            </div>
          </div>
        </div>
</div>    
            <div class="d-flex justify-content-center" >
            <div class="btn btn-primary" style="margin:30px;">
             <a class="ExportToWord" style="color:white;" name="doc"><i class="fas fa-download"></i> Descargar</a> 
            </div>    
            </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="FileSaver.js"></script> 
<script src="jquery.wordexport.js"></script> 
<script type="text/javascript">
    $(function() {   
        $(".ExportToWord").click(function(event) {
            $("#content").wordExport();
        });
    });
    </script>
</body>
</html>