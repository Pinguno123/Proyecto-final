<?php
        include 'modelo/db.php';
        include 'controlador/changeController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cambiar contraseña</title>
</head>
<body>
        <form action="" method="post">
                <label for="NOMBRE_USUARIO">Nombre de usuario</label>
                <input type="text" name="NOMBRE_USUARIO" id="">
                <label for="CONTRASENA_USUARIO">Contraseña nueva</label>
                <input type="password" name="CONTRASENA_USUARIO" id="">
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
                <a href="index.php">Volver</a>
        </form>
</body>
</html>