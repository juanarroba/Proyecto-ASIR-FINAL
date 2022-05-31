<?php
include_once('conexionae.php');
session_start();
// ob start porque en server los output estan capados xd
ob_start();
if(isset($_SESSION['firmaname'])){
    // la pagina filtro a evolucionado, pasa de resolver un problema para 
    // poner una cookie dentro de un campo de form a insertar datos en tablas
    // de BD 
    $dni = $_COOKIE['dni'];
    $fecha1 = $_SESSION['fecha1'];
    date_default_timezone_set('Europe/Madrid'); 
    // si no por defecto doge dos horas menos.
    $ahora = date("H:i:s"); 

    echo "$dni";
    echo "$fecha1";
    echo "$ahora";
    if(isset($_COOKIE['antiexplotacion'])){
        $fecha2 = $_COOKIE['antiexplotacion'];
        $sql = "INSERT INTO registro (FechaRegistro, NIF, HoraEntrada, HoraSalida) 
        VALUES ('$fecha1', '$dni', '$fecha2', '$ahora')";
        $result = mysqli_query($db, $sql);
        setcookie("antiexplotacion", "$ahora", time() + (3600*8));
        setcookie("salidafirmada", "ya has firmado la salida", time() + (3600*8));
    }
    else{
    $sql = "INSERT INTO registro (FechaRegistro, NIF, HoraEntrada) VALUES ('$fecha1', '$dni', '$ahora')";
    $result = mysqli_query($db, $sql);
    $sql1 = "INSERT INTO asistencia (FechaRegistro, NIF, HoraEntrada) VALUES ('$fecha1', '$dni', '$ahora')";
    $result1 = mysqli_query($db, $sql1);
    // en lugar de 60 poner horas maximas de trabajo al dia 3600 * 13
    setcookie("antiexplotacion", "$ahora", time() + (3600*13));
    
    }
}
if(isset ($_COOKIE['dni'])){
    
  
header('Location: https://controlasistenciaasir.000webhostapp.com/firmacookie.php');
}
else{
header('Location: https://controlasistenciaasir.000webhostapp.com/firma.php');
}
ob_end_flush(); 
?>