<?php 
    require_once "../modelo/db.php";

    $user = $_POST['Nombre'];
    $pass = $_POST['Contrasena'];

$sql = "SELECT ID_Rol, Nombre, Contrasena FROM usuarios WHERE Nombre = '$user' and Contrasena = '$pass'"; 
$resultado = $mysqli->query($sql);

if ($row = $resultado->fetch_assoc()) {

    header("location: ../vistas/admin/index.php");
} else {
    echo "Datos erroneos";
}
?>