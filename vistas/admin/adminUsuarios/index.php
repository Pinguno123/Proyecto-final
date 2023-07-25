<?php 
    // include "../../../../controlador/mostrarUsuarios.php";

    $mysqli = new mysqli("localhost","root","root","clickmaster");

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    
    $sql = "SELECT * FROM usuario";
    $resultado = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Vista usuarios</title>
</head>
<body>

<div class="container my-5">
            <h2>Lista de usuarios</h2>
            <a href="crear.php" class="btn btn-primary" role="button">Crear usuario</a>
            <div class="table-responsive-md my-3">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Password</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($array = $resultado->fetch_assoc()) {
                            echo "
                        <tr>
                            <td>" . $array['ID_USUARIO'] . "</td>
                            <td>" . $array['NOMBRE_USUARIO'] . "</td>
                            <td>" . $array['CONTRASENA_USUARIO'] . "</td>
                            <td>" . $array['CORREO_USUARIO'] . "</td>
                            <td>
                                <a href='editar.php?id=" . $array['ID_USUARIO'] . "' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='eliminar.php?id=" . $array['ID_USUARIO'] . "' class='btn btn-danger btn-sm'>Eliminar</a>
                            </td>
                        </tr>
                        ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>