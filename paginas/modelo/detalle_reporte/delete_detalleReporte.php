<?php
session_start();
include_once("DetalleReporteCollector.php");

$id = $_GET['ID'];


$DetalleReporteCollectorObj = new DetalleReporteCollector();
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
        $DetalleReporteCollectorObj->deleteDetalleReporte($id);
        ?>
        <a href="read_DetalleReporte.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
