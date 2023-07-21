<?php 
    require_once "../modelo/db.php";

    $user = $_POST['Nombre'];
    $pass = $_POST['Contrasena'];
    $email = $_POST['Correo'];

    $sql = "INSERT INTO usuarios (ID_Usuario, ID_Rol, Nombre, Contrasena, Correo) VALUES (NULL, '2', '$user', '$pass', '$email');";
    $resultado = $mysqli->query($sql);

    header("Location: ../vistas/inicio/login.php");
?>