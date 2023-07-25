<?php 
    require_once "../modelo/db.php";

    $user = $_POST['NOMBRE_USUARIO'];
    $pass = $_POST['CONTRASENA_USUARIO'];

<<<<<<< HEAD
    $sql = "SELECT * FROM usuario WHERE NOMBRE_USUARIO = '$user' AND CONTRASENA_USUARIO = '$pass'";
    $resultado = $mysqli->query($sql);
=======
$sql = "SELECT ID_USUARIO, NOMBRE_USUARIO, CONTRASENA_USUARIO FROM usuario WHERE NOMBRE_USUARIO = '$user' and CONTRASENA_USUARIO = '$pass'";
$resultado = $mysqli->query($sql);
>>>>>>> ecf929af6c9def8f5b784613aafca0b3555a1c46

if ($row = $resultado->fetch_assoc()) {

    header("location: ../vistas/admin/index.php");
} else {
    echo "Datos erroneos";
}
?>