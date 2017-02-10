<?php
session_start();
include_once("ciudadCollector.php");

$nombre = $_POST['nombre'];
$id_pais = $_POST['id_pais'];


$ciudadCollectorObj = new ciudadCollector();
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
        echo "<p>La ciudad ha sido guardada</p>";
        $ciudadCollectorObj->createCiudad($nombre,$id_pais);
        ?>
        <a href="leerCiudad.php"><button>volver</button></a>
       
  
    </body>
</html>
