<?php

$nombre = "";
$email = "";
$telefono = "";
$direccion = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['ID_USUARIO'])) {
        header("location: /Proyecto-final/index.php");
        exit;
    }

    $id = $_GET['ID_USUARIO'];

    $sql = "SELECT * FROM usuario WHERE ID_USUARIO = $id";
    $resultado = $connection->query($sql);
    $row = $resultado->fetch_assoc();

    if (!$row) {
        header("location: /Proyecto-final/index.php");
        exit;
    }

    $nombre = $row["NOMBRE_USUARIO"];
    $pass = $row["CONTRASENA_USUARIO"];

} else {
    $id = $_POST["ID_USUARIO"];
    $nombre = $_POST["NOMBRE_USUARIO"];
    $email = $_POST["email"];
    $telefono = $_POST["phone"];
    $direccion = $_POST["address"];

    do {
        if (empty($nombre) || empty($email) || empty($telefono) || empty($direccion)) {
            $errorMessage = "Todos los campos son requeridos";
            break;
        }

        $sql = "UPDATE clientes SET name = '$nombre', email = '$email', phone = '$telefono', address = '$direccion' WHERE id = $id";

        $resultado = $connection->query($sql);

        if (!$resultado) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Nuevo cliente agregado correctamente";

        header("location: /Crud/index.php");
        exit;

    } while (false);
}
?>