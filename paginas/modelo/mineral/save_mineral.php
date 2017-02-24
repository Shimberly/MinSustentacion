<?php
session_start();
include_once("mineralcollector.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


$mineralcollectorObj = new mineralcollector();
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
        echo "<p>Se creo un nuevo mineral</p>";
        $mineralcollectorObj->createmineral($nombre,$descripcion);
        ?>
        <a href="read_mineral.php"><button>VOLVER</button></a>
       
  
    </body>
</html>