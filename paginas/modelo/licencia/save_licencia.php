<?php
session_start();
include_once("LicenciaCollector.php");

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];


$LicenciaCollectorObj = new LicenciaCollector();
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
        echo "<p>Se ha creado un nuevo tipo de licencia</p>";
        $LicenciaCollectorObj->createLicencia($nombre,$tipo);
        ?>
        <a href="read_licencia.php"><button>VOLVER</button></a>
       
  
    </body>
</html>