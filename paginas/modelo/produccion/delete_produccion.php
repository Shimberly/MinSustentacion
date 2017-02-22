<?php
session_start();
include_once("produccioncollector.php");

$id_produccion = $_GET['id_produccion'];


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
        echo "<p>Se eliminó el índice #" . $id_produccion ."?</p>";
        $produccioncollectorObj->deleteproduccion($id_produccion);
        ?>
        <a href="read_produccion.php"><button>VOLVER</button></a>
       
  
    </body>
</html>