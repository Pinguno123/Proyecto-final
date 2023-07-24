<?php require_once ("modelo/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="controlador/registerController.php" method="POST">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="">
        <label for="Contrasena">Contraseña</label>
        <input type="text" name="Contrasena" id="">
        <label for="Correo">Correo Electronico</label>
        <input type="email" name="Correo" id="">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <a href="login.php">Iniciar Sesion</a>
    </form>
</body>
</html>