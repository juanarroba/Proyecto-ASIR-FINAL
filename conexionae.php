<?php

$server = 'localhost';
$username = 'id18831733_root';
$password = '76WaD890@123';
$database = 'id18831733_asistencias_empleados';

$db = mysqli_connect($server, $username, $password, $database);

// Codificación de caracteres a uft8
mysqli_query($db, "SET NAMES 'utf8");
?>