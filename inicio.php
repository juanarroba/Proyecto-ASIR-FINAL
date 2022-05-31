<?php
include_once('conexionae.php');


session_start();
//echo $_SESSION['consultalogin'];
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nombre Empresa</title>
    <link rel="stylesheet" href="styles.css"> 
    
  </head>
  <body>
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <img src="imagenes/logovelez.jpg" alt="logo velez" width="50" height="50" style="float:left ;">
            <h1 style="text-align: center;">Nombre Empresa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3" class="boton1">
                    <a href="qr.php">QR</a>
                    </div>
                    <div class="col-md-3">
                        <a href="verregistros.php">ver registros</a>
                    </div>
                    <div class="col-md-2">
                    <a href="filtro.php">firmar</a>
                    </div>
                    <div class="col-md-2">
                    <a href="contacto.php">contacto</a>
                    </div>
                    <?php 
                    if($_SESSION['consultalogin'] == 4){
                    ?>
                    <div class="col-md-2">
                    <a href="https://databases-auth.000webhost.com/db_structure.php?db=id18831733_asistencias_empleados">panel admin</a>
                    </div>
                    <?php }
                    else{
                      ?><div class="col-md-2">
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
