<?php
SESSION_START();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if( $_POST["submit"] ){
      foreach($_POST as $campo => $valor) {
          $_SESSION['registro'][$campo] = $valor;
      }
    }
}
$Nombres=$_SESSION['registro']['Nombres'];
$Apellidos=$_SESSION['registro']['Apellidos'];
$Edad=$_SESSION['registro']['Edad'];
$Grado=$_SESSION['registro']['Grado'];
$id_usu=$_SESSION["usuario"]["id"];

include_once '../datos/Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "INSERT INTO `datosusuario` ( `nombres`, `apellidos`, `edad`, `grado`, `id_usu`)
 VALUES ('$Nombres', '$Apellidos', '$Edad', '$Grado', '$id_usu')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

?>