<?php
session_start();
include_once("DetalleReporteCollector.php");

$id_detalle_reporte = $_POST['id_detalle_reporte'];
$id_dron = $_POST['id_dron'];
$id_tunel = $_POST['id_tunel'];
$id_reporte = $_POST['id_reporte'];
$id_datos_tunel = $_POST['id_datos_tunel'];

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
        echo "<p>Se modifico una nueva mina</p>";
        $DetalleReporteCollectorObj->updateDetalleReporte($id_dron,$id_tunel,$id_reporte,$id_datos_tunel);
        ?>
        <a href="read_DetalleReporte.php"><button>VOLVER</button></a>
       
  
    </body>
</html>