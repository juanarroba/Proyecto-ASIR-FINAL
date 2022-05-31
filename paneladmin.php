<?php
include_once('conexionae.php');
session_start();
//$usuario = $_POST['usuario'];
//$sql = "SELECT nombreusuario FROM usuarios WHERE permiso = 4;";
//$login = mysqli_query($db, $sql);


//$_SESSION['id_usuario'] = $usuario;

if($_SESSION['consultalogin'] == 4){
      
}
else 
{
 header('Location: https://controlasistenciaasir.000webhostapp.com/inicio.php');
 echo "algo salio mal";
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

    <title>Firma</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Panel Admin</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1 style="text-align: center;">Ejecución</h1>
                        <div class="col-md-2">

						</div>
                    </div>
                    <div class="col-md-6">
                        <h1> Resultado</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>