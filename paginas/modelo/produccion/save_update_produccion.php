<?php
session_start();
include_once("produccioncollector.php");

$id_produccion = $_POST['id_produccion'];
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
        echo "<p>Se modificó el produccion</p>";
        $produccioncollectorObj->updateproduccion($id_produccion,$fecha,$id_empresa);
        ?>
        <a href="read_produccion.php"><button>VOLVER</button></a>
       
  
    </body>
</html>