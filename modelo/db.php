<?php 
<<<<<<< HEAD
$mysqli = new mysqli("localhost","root","root","clickmaster");
=======
$mysqli = new mysqli("localhost","root","","clickmaster");
>>>>>>> ecf929af6c9def8f5b784613aafca0b3555a1c46

if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>