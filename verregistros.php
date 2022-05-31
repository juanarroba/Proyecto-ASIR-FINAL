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
<?php
 include_once ('conexionae.php');

                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT e.NIF, e.NombreEmpleado, e.Puesto, r.FechaRegistro, a.NumeroAsistencia \n"

                        . "FROM empleado e\n"
            
                        . "LEFT JOIN registro r\n"
            
                        . "on e.NIF=r.NIF\n"
            
                        . "LEFT JOIN asistencia a\n"
            
                        . "on r.NIF = a.NIF\n"
            
                        . "ORDER BY r.FechaRegistro DESC";


                echo '<table border="0" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td> <font face="Arial">NIF</font> </td> 
                    <td> <font face="Arial">NombreEmpleado</font> </td> 
                    <td> <font face="Arial">Puesto</font> </td> 
                    <td> <font face="Arial">Fecha Registro</font> </td> 
                    <td> <font face="Arial">Numero Asistencia</font> </td> 
                </tr>';

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $NIF = $row["NIF"];
                        $NombreEmpleado = $row["NombreEmpleado"];
                        $Puesto = $row["Puesto"];
                        $FechaRegistro = $row["FechaRegistro"];
                        $NumeroAsistencia = $row["NumeroAsistencia"];

                        echo '<tr> 
                                <td>' . $NIF . '</td> 
                                <td>' . $NombreEmpleado . '</td> 
                                <td>' . $Puesto . '</td> 
                                <td>' . $FechaRegistro . '</td>
                                <td>' . $NumeroAsistencia .'</td> 
                            </tr>';
                            // al parecer no hace falta poner e. o r. en el row para que coja el dato.
                    }
                    $result->free();
                }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>