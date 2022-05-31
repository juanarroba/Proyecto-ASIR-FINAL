<?php
include_once('conexionae.php');
if (!empty($_REQUEST['usuario']) && !empty($_REQUEST['password']) && !empty($_REQUEST['dni'])) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $puesto = $_POST['puesto']; 

    $sql2 = "INSERT INTO `usuarios` (NIF, nombreusuario, contraseña) 
    VALUES ('$dni', '$usuario',  '$password_segura');";
    
    $resultado = @mysqli_query( $db, $sql2 );
}
?>