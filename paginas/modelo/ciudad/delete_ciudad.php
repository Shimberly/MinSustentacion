<?php
session_start();
include_once("ciudadCollector.php");

$id = $_GET['ID'];


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
        echo "<p>Se elimino la ciudad #" . $id ." :c </p>";
        $ciudadCollectorObj->deleteCiudad($id);
        ?>
        <a href="leerCiudad.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
