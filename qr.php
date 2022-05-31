<?php
    ob_start();
    session_start();
    if($_SESSION['consultalogin'] == 4){
      
    }
    else 
    {
     header('Location: https://controlasistenciaasir.000webhostapp.com/inicio.php');
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>qr </title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <div style="text-align: center" class="col-md-12" id="qrcode">
<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fcontrolasistenciaasir.000webhostapp.com%2Fqrsession.php&s=6&e=m" alt="Generador de Códigos QR Codes"/>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


