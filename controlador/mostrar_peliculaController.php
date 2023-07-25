<?php
    require_once "../modelo/db.php";

    $slq = "SELECT * FROM info_pelicula";
    $resultado = $mysqli->query($sql);
    $row = mysqli_fetch_array($resultado);
?>