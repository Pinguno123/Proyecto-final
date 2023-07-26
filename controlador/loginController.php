<?php 
    require_once "../modelo/db.php";

    $user = $_POST['NOMBRE_USUARIO'];
    $pass = $_POST['CONTRASENA_USUARIO'];

$sql = "SELECT ID_USUARIO, NOMBRE_USUARIO, CONTRASENA_USUARIO FROM usuario WHERE NOMBRE_USUARIO = '$user' and CONTRASENA_USUARIO = '$pass'";
$resultado = $mysqli->query($sql);

if ($row = $resultado->fetch_assoc()) {

    header("location: ../vistas/admin/index.php");
} else {
    echo "Datos erroneos";
}
?>