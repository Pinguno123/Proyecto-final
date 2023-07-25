<?php 
    include '../../../modelo/db.php';
    include '../../../controlador/mostrar_usuarioController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
<div class="container my-5">
            <h2>Lista de Usuarios</h2>
            <a href="crear.php" class="btn btn-primary" role="button">Crear Usuarios</a>
            <div class="table-responsive-md my-3">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID ROl</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            echo "
                        <tr>
                            <td>" . $row['ID_USUARIO'] . "</td>
                            <td>" . $row['ID_ROL'] . "</td>
                            <td>" . $row['NOMBRE_USUARIO'] . "</td>
                            <td>" . $row['CONTRASENA_USUARIO'] . "</td>
                            <td>" . $row['CORREO_USUARIO'] . "</td>
                            <td>
                                <a href='editar.php?ID_USUARIO=" . $row['ID_USUARIO'] . "' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='eliminar.php?id=" . $row['ID_USUARIO'] . "' class='btn btn-danger btn-sm'>Eliminar</a>
                            </td>
                        </tr>
                        ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
crossorigin="anonymous"></script>

</body>
</html>