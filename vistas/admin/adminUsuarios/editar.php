<?php
    include '../../../modelo/db.php';
    include '../../../controlador/changeController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar contraseña del usuario <?php echo 'Clickmaster'; ?></title>
</head>
<body>
        <div class="container my-5">
            <h2>Editar el perfil de <?php echo $nombre; ?></h2>
            <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>
            <form method="post">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="" value="<?php echo $nombre; ?>" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="text" name="email" id="" value="<?php echo $email; ?>" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-6">
                        <input type="text" name="phone" id="" value="<?php echo $telefono; ?>" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" name="address" id="" value="<?php echo $direccion; ?>"
                            class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a href="index.php" class="btn btn-outline-primary" role="button">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>