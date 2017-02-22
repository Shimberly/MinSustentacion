<?php
session_start();
include_once("DronCollector.php");

$marca = $_POST['nombre'];
$num_serial = $_POST['num_serial'];
$id_empresa = $_POST['id_empresa'];
$min_bateria = $_POST['min_bateria'];


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
        echo "<p>Se creo una nueva mina</p>";
        $DronCollectorObj->createDron($marca,$num_serial,$id_empresa,$bateria_minutos);
        ?>
        <a href="read_dron.php"><button>VOLVER</button></a>
       
  
    </body>
</html>