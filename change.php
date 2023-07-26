<?php
        include 'modelo/db.php';
        include 'controlador/changeController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Cambiar contraseña</title>
</head>
<body>
        <div class="container">
                <form method="post">
                        <div class="label">
                                <label for="CORREO_USUARIO">Correo electronico</label>
                                <input type="email" name="CORREO_USUARIO" id="" placeholder="Ingrese su correo electronico">
                                <label for="CONTRASENA_USUARIO">Contraseña nueva</label>
                                <input type="text" name="CONTRASENA_USUARIO" id="" placeholder="Ingrese su nueva contraseña">
                        </div>
                        <div class="boton">
                                <input type="submit" value="Enviar" class="btn btn-primary">
                                <input type="reset" value="Borrar" class="btn btn-warning">
                        </div>
                        <div class="links">
                                <a href="index.php">Volver</a>
                        </div>
                </form>
        </div>
</body>
</html>