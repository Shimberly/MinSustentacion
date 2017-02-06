<?php
session_start();
include_once("MinaCollector.php");

$nombre = $_POST['nombre'];
$id_empresa = $_POST['id_empresa'];
$ubicacion = $_POST['ubicacion'];


$MinaCollectorObj = new MinaCollector();
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
        $MinaCollectorObj->createMina($nombre,$id_empresa,$ubicacion);
        ?>
        <a href="read_mina.php"><button>VOLVER</button></a>
       
  
    </body>
</html>