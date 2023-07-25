<?php 
    require_once "../modelo/db.php";

    $user = $_POST['NOMBRE_USUARIO'];
    $pass = $_POST['CONTRASENA_USUARIO'];

    $sql = "SELECT * FROM usuario WHERE NOMBRE_USUARIO = '$user' AND CONTRASENA_USUARIO = '$pass'";
    $resultado = $mysqli->query($sql);

if ($row = $resultado->fetch_assoc()) {

    header("location: ../vistas/admin/index.php");
} else {
    echo "Datos erroneos";
}
?>