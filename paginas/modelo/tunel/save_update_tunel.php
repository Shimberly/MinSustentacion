<?php
session_start();
include_once("MinaCollector.php");

$id = $_POST['id_mina'];
$nombre = $_POST['nombre'];
$id_empresa = $_POST['id_empresa'];
$ubicacion = $_POST['ubicacion'];


$MinaCollectorObj = new MinaCollector();
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
        $MinaCollectorObj->updateMina($id,$nombre,$id_empresa,$ubicacion);
        ?>
        <a href="read_mina.php"><button>VOLVER</button></a>
       
  
    </body>
</html>