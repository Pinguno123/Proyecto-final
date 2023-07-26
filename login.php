<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <form action="controlador/loginController.php" method="POST">
            <div class="label">
                <label for="NOMBRE_USUARIO">Usuario</label>
                <input type="text" name="NOMBRE_USUARIO" id="" placeholder="Ingrese nombre de usuario">
                <label for="CONTRASENA_USUARIO">Contraseña</label>
                <input type="text" name="CONTRASENA_USUARIO" id="" placeholder="Ingrese su contraseña">
            </div>
            <div class="boton">
                <input type="submit" value="Enviar" class="btn btn-primary">
                <input type="reset" value="Borrar" class="btn btn-warning">
            </div>
            <div class="links">
                <a href="register.php">Registrarse</a>
                <a href="change.php">Olvide mi contraseña</a>
            </div>
        </form>
    </div>
</body>
</html>