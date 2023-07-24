<?php require_once ("modelo/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action='controlador/registerController.php' method="POST">
        <label for="NOMBRE_USUARIO">Nombre</label>
        <input type="text" name="NOMBRE_USUARIO" id="">
        <label for="CONTRASENA_USUARIO">Contraseña</label>
        <input type="text" name="CONTRASENA_USUARIO" id="">
        <label for="CORREO_USUARIO">Correo Electronico</label>
        <input type="email" name="CORREO_USUARIO" id="">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <a href="login.php">Iniciar Sesion</a>
    </form>
</body>
</html>