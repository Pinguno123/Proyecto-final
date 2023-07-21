<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="controlador/loginController.php" method="POST">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="">
        <label for="Contrasena">Contraseña</label>
        <input type="text" name="Contrasena" id="">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <a href="register.php">Registrar</a>
    </form>
</body>
</html>