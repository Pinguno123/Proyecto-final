<?php require_once ("modelo/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="container">
        <form action='controlador/registerController.php' method="POST">
            <div class="label">
                <label for="NOMBRE_USUARIO">Nombre</label>
                <input type="text" name="NOMBRE_USUARIO" id="" placeholder="Ingrese nombre de usuario">
                <label for="CONTRASENA_USUARIO">Contraseña</label>
                <input type="text" name="CONTRASENA_USUARIO" id="" placeholder="Ingrese su contraseña">
                <label for="CORREO_USUARIO">Correo Electronico</label>
                <input type="email" name="CORREO_USUARIO" id="" placeholder="Ingrese su correo electronico">
            </div>
            <div class="boton">
                <input type="submit" value="Enviar" class="btn btn-primary">
                <input type="reset" value="Borrar" class="btn btn-warning">
            </div>
            <div class="links">
                <a href="login.php">Volver</a>
            </div>
        </form>
    </div>
</body>
</html>