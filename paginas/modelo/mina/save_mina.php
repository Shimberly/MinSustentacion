<?php
session_start();
include_once("DemoCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


$DemoCollectorObj = new DemoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>Se creo un nuevo usuario</p>";
        $DemoCollectorObj->createDemo($nombre,$apellido);
        ?>
        <a href="read_Demo.php"><button>VOLVER</button></a>
       
  
    </body>
</html>