<?php 
    require_once "../modelo/db.php";

    $user = $_POST['NOMBRE_USUARIO'];
    $pass = $_POST['CONTRASENA_USUARIO'];
    $email = $_POST['CORREO_USUARIO'];

<<<<<<< HEAD
    $sql = "INSERT INTO usuario (ID_USUARIO, ID_ROL, NOMBRE_USUARIO, CONTRASENA_USUARIO, CORREO_USUARIO) VALUES (NULL, '2', '$user', '$pass', '$email');";
=======
    $sql = "INSERT INTO usuario (`ID_USUARIO`, `ID_ROL`, `NOMBRE_USUARIO`, `CONTRASENA_USUARIO`, `CORREO_USUARIO`) VALUES (NULL, '2', '$user', '$pass', '$email');";
>>>>>>> ecf929af6c9def8f5b784613aafca0b3555a1c46
    $resultado = $mysqli->query($sql);

    header("Location: ../login.php");
?>