<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="controlador/loginController.php" method="POST">
        <label for="NOMBRE_USUARIO">Nombre</label>
        <input type="text" name="NOMBRE_USUARIO" id="">
        <label for="CONTRASENA_USUARIO">Contraseña</label>
        <input type="text" name="CONTRASENA_USUARIO" id="">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <a href="register.php">Registrar</a>
    </form>
</body>
</html>