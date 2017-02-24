<?php
session_start();
include_once("LicenciaCollector.php");

$id = $_GET['ID'];


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
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $LicenciaCollectorObj->deleteLicencia($id);
        ?>
        <a href="read_licencia.php"><button>VOLVER</button></a>
       
  
    </body>
</html>