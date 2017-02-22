<?php
session_start();
include_once("detalle_produccioncollector.php");

$id_detalle_produccion = $_GET['id_detalle_produccion'];


$detalle_produccioncollectorObj = new detalle_produccioncollector();
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
        echo "<p>Se eliminó el índice #" . $id_detalle_produccion ."?</p>";
        $detalle_produccioncollectorObj->deletedetalle_produccion($id_detalle_produccion);
        ?>
        <a href="read_detalle_produccion.php"><button>VOLVER</button></a>
       
  
    </body>
</html>