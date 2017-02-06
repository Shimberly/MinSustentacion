<?php
session_start();
include_once("MinaCollector.php");

$id = $_GET['ID'];


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
        echo "<p>Se elimino la tabla #" . $id ."?</p>";
        $MinaCollectorObj->deleteMina($id);
        ?>
        <a href="read_mina.php"><button>VOLVER</button></a>
       
  
    </body>
</html>