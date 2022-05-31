<?php
ob_start();
session_start();

//echo "esto es firmacookie" . $_COOKIE['dni'];
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
          <div class="col-md-4" style="text-align:center ;">
            <form id="firma" action="firmacookie.php" method="POST">
              <label for="dni" id="login-nombre">DNI</label>
              <input type="text" name="dni" id="dni" value="
            <?php
            if (isset($_COOKIE['dni'])) {echo $_COOKIE['dni'];} else {}
            ?>" maxlength="9">
          </div>
          <div class="col-md-4" style="text-align:center ;">
            <label for="fecha" id="fecha">Fecha</label>
            <input type="date" name="fecha" id=fecha>
          </div>
          <div class="col-md-4" style="text-align:center ;">
            
            <!-- aunque se visualiza la fecha del tipo dd mm yyyy luego la variable por defecto es de yyyy mm dd (no hay que retocar nada en principio)-->
            <input type="submit" id="firmar" value="Firmar" name="firmaname">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $dni = $_COOKIE['dni'];
  echo $_COOKIE['salidafirmada'];
  echo "<p>$dni</p>";
  // setcookie("dni","$dni",time() + (10 * 365 * 24 * 60 * 60));
  if (!empty($_POST['dni']) && !empty($_POST['fecha'])) {

    $dni = $_POST['dni'];
    // echo "<p>$dni</p>";
    setcookie("dni", "$dni", time() + (3600 * 13));
    $fecha = $_POST['fecha'];
    $_SESSION['fecha1'] = $fecha;
    $firmaname = $_POST['firmaname'];
    $_SESSION['firmaname'] = $firmaname;
    // echo "<p>$fecha</p>";
    echo "has firmado";
    // echo "la cookie es". $_COOKIE['dni'];
    header('Location: https://controlasistenciaasir.000webhostapp.com/filtro.php');
  } else {
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>