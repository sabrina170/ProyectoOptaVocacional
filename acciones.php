<?php

$accion = $_POST['accion'];

switch ($accion) {

    case  'RegistrarUser':

        include_once 'datos/Conexion.php';
        $objeto = new Conexion();
        $conexion = $objeto->conectar();


        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        $registro = "INSERT INTO `usuariopublico` ( `nombre`, `correo`) VALUES ('$nombre', '$email');";
        $resultado_registro = mysqli_query($conexion, $registro);

        if (!$resultado_registro) {
            echo $cn->error();
        } else {
            echo 1;
        }
        //echo $correo . $password . $nombre;
        break;
}
