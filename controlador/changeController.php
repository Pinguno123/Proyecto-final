<?php
    $email = $_POST['CORREO_USUARIO'];
    $pass = $_POST['CONTRASENA_USUARIO'];

    $sql = "SELECT CONTRASENA_USUARIO FROM usuario WHERE CORREO_USUARIO = '$email'";
    $resultado = $mysqli->query($sql);
    
    $errorMsg = "Error en el correo de usuario";

    if ($row = $resultado->fetch_assoc()) {
        $sql2 = "UPDATE usuario SET CONTRASENA_USUARIO = '$pass' WHERE CORREO_USUARIO = '$email';";
        $resultado2 = $mysqli->query($sql2);

        if ($resultado2) {
            header("Location: index.php");
        } 
    }
?>