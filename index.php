<?php
include_once('conexionae.php');
session_start();

// parte del registro
if (isset($_REQUEST['registrarsesubmit'])) {
  //echo "reg";
  if (!empty($_REQUEST['usuario']) && !empty($_REQUEST['password']) && !empty($_REQUEST['dni'])) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $puesto = 0;
    $puesto = $_POST['puesto'];

    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

    $sql = "INSERT INTO empleado (NIF, NombreEmpleado, Puesto) VALUES ('$dni', '$nombre', '$puesto')";
    $sql1 = "INSERT INTO usuarios (NIF, nombreusuario, contraseña) VALUES ('$dni', '$usuario', '$password_segura')";
    $result = mysqli_query($db, $sql);
    $result = mysqli_query($db, $sql1);
    if (@mysqli_errno($db) != 0) {
      //die("Error " . @mysqli_errno( $db ) . ": " . @mysqli_error( $db ));
    }
  } else {
    echo "el usuario ya esta en uso o no se han introducido todos los datos";
  }
} elseif (isset($_REQUEST['loginsumbit'])) {

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  //meter aqui un filtro para cuando el usuario no esta en BD
  if (!empty($_REQUEST['usuario']) && !empty($_REQUEST['password'])) {
    $sql0 = "SELECT * FROM usuarios WHERE nombreusuario = '$usuario';";
    $login0 = mysqli_query($db, $sql0);
    $row0 = mysqli_fetch_array($login0);
    $loginsesion = $row0[3];
    $sql = "SELECT * FROM usuarios WHERE nombreusuario = '$usuario';";
    $login = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($login);

    $verify = password_verify($password, $row['contraseña']);
    //$loginsesion = 1224;
    if (count($row) > 0 && $verify) {
      echo "hola";
      //echo $_SESSION['qr'];
      //echo $_SESSION['consultalogin'];
      $_SESSION['consultalogin'] = $loginsesion;
      // Almacenamos a ese nuevo usuario en una sesion activa para que navegue
      //$usuario = $_POST['usuario'];
      if (!empty($_SESSION['qr']) && !empty($_SESSION['consultalogin'])) {
        header('Location: https://controlasistenciaasir.000webhostapp.com/filtro.php');
      } elseif (isset($_SESSION['consultalogin'])) {
        header('Location: https://controlasistenciaasir.000webhostapp.com/inicio.php');
      }
    } else {
      echo "Lo sentimos, sus datos son incorrectos";
    }
  }
} else {
     
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

  <title>Nombre Empresa</title>
  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h3>
                  Login
                </h3>
                <form id="login" action="index.php" method="POST">
                  <div class="form-group">

                    <label for="usuario">
                      Nombre de usuario.
                    </label>
                    <input type="text" class="form-control" id="usuario" name="usuario" />
                  </div>
                  <div class="form-group">
                    <label for="password">
                      Password
                    </label>
                    <input type="password" class="form-control" id="password" name="password" />
                  </div><br>
                  <button type="submit" class="btn btn-primary" name="loginsumbit">
                    Submit
                  </button>
                </form>
              </div>
              <div class="col-md-6">
                <h3>
                  Registrate
                </h3>
                <form id="registro" action="index.php" method="POST">
                  <div class="form-group">

                    <label for="usuario">
                      Nombre de usuario.
                    </label>
                    <input type="text" class="form-control" id="usuario" name="usuario" />
                  </div>
                  <div class="form-group">

                    <label for="nombre">
                      Nombre de empleado.
                    </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" />
                  </div>
                  <div class="form-group">

                    <label for="password">
                      Password
                    </label>
                    <input type="password" class="form-control" id="password" name="password" />
                  </div>
                  <div class="form-group">

                    <label for="dni">
                      DNI
                    </label><br>
                    <input type="text" clas="form-control" name="dni" id="dni" maxlength="9">
                  </div>
                  <div class="form-group">

                    <label for="puesto">
                      Puesto
                    </label><br>
                    <input type="text" clas="form-control" name="puesto" id="puesto">
                  </div><br>
                  <button type="submit" class="btn btn-primary" name="registrarsesubmit">
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>