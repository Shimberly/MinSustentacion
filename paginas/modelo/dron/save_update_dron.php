<?php
session_start();
include_once("DronCollector.php");

$id = $_POST['id_dron'];
$marca = $_POST['marca'];
$num_serial = $_POST['num_serial'];
$id_empresa = $_POST['id_empresa'];
$minuto_bateria = $_POST['minuto_bateria'];


$DronCollectorObj = new DronCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>Se modifico el dron</p>";
        $DronCollectorObj->updateDron($marca,$num_serial,$id_empresa,$bateria_minutos);
        ?>
        <a href="read_dron.php"><button>VOLVER</button></a>
       
  
    </body>
</html>