<?php
session_start();
include_once("paisCollector.php");

$nombre = $_POST['nombre'];



$paisCollectorObj = new paisCollector();
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
        echo "<p>El pais ha sido guardado</p>";
        $paisCollectorObj->createPais($nombre);
        ?>
        <a href="leerPais.php"><button>volver</button></a>
       
  
    </body>
</html>
