<?php
session_start();
include_once("DronCollector.php");

$id = $_GET['ID'];


$DropCollectorObj = new DropCollector();
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
        $DronCollectorObj->deleteDron($id);
        ?>
        <a href="read_dron.php"><button>VOLVER</button></a>
       
  
    </body>
</html>