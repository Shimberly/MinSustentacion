<?php
session_start();
include_once("produccioncollector.php");

$fecha = $_POST['fecha'];
$id_empresa = $_POST['id_empresa'];


$produccioncollectorObj = new produccioncollector();
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
        echo "<p>Se creo un nuevo produccion</p>";
        $produccioncollectorObj->createproduccion($fecha,$id_empresa);
        ?>
        <a href="read_produccion.php"><button>VOLVER</button></a>
       
  
    </body>
</html>