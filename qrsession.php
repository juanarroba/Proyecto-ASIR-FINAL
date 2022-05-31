<?php
session_start();
if(isset ($_COOKIE['dni'])){
    $_SESSION['qr'] = 'qr';
    

header('Location: https://controlasistenciaasir.000webhostapp.com/firmacookie.php');
}
else{
$_SESSION['qr'] = 'qr';
header('Location: https://controlasistenciaasir.000webhostapp.com/index.php');
}
?>