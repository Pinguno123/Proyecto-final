<<<<<<< HEAD
=======
<?php require_once ("modelo/db.php"); ?>
>>>>>>> ecf929af6c9def8f5b784613aafca0b3555a1c46
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<<<<<<< HEAD
    <form action="controlador/registerController.php" method="POST">
=======
    <form action='controlador/registerController.php' method="POST">
>>>>>>> ecf929af6c9def8f5b784613aafca0b3555a1c46
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