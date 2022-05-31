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
                        $query = "SELECT `empleado`.`NombreEmpleado`, `registro`.`FechaRegistro`, `registro`.`HoraEntrada`, `registro`.`HoraSalida`\n"

                        . "FROM `empleado` \n"
                    
                        . "	LEFT JOIN `registro` ON `registro`.`NIF` = `empleado`.`NIF`\n"
                    
                        . "    ORDER BY FechaRegistro DESC, HoraEntrada DESC";

                echo '<table border="0" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td class="col-md-3" style="text-align:center ;"> <font face="Arial">Nombre del empleado</font> </td>
                    <td class="col-md-3" style="text-align:center ;"> <font face="Arial">Fecha</font> </td>  
                    <td class="col-md-3" style="text-align:center ;"> <font face="Arial">Hora de entrada</font> </td> 
                    <td class="col-md-3" style="text-align:center ;"> <font face="Arial">Hora de salida</font> </td> 

                    
                </tr>';

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $nombreEmpleado = $row["NombreEmpleado"];
                        $fecha = $row["FechaRegistro"];
                        $horaEntrada = $row["HoraEntrada"];
                        $horaSalida = $row["HoraSalida"];
                        
                        echo '<tr> 
                                <td style="background-color: aqua ;text-align:center;border-bottom:1pt solid black;">' . $nombreEmpleado . '</td> 
                                <td style="background-color: bisque;text-align:center;border-bottom:1pt solid black;">' . $fecha . '</td> 
                                <td style="background-color: aqua ;text-align:center;border-bottom:1pt solid black;">' . $horaEntrada . '</td> 
                                <td style="background-color: bisque ;text-align:center;border-bottom:1pt solid black;">' . $horaSalida . '</td> 
                                
                            </tr>';
                            
                            // al parecer no hace falta poner e. o r. en el row para que coja el dato.
                    }
                    $result->free();
                }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 