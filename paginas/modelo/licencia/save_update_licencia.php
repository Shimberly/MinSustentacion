<?php
session_start();
include_once("LicenciaCollector.php");

$id = $_POST['id_licencia'];
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
        echo "<p>Se modifico una nueva mina</p>";
        $LicenciaCollectorObj->updateLicencia($id,$nombre,$tipo);
        ?>
        <a href="read_licencia.php"><button>VOLVER</button></a>
       
  
    </body>
</html>