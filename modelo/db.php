<?php 
$mysqli = new mysqli("localhost","root","root","pruebas_clickmaster");

if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>