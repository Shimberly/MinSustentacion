<?php
session_start();
include_once("TunelCollector.php");

$id = $_GET['ID'];


$TunelCollectorObj = new TunelCollector();
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
        $TunelCollectorObj->deleteTunel($id);
        ?>
        <a href="read_tunel.php"><button>VOLVER</button></a>
       
  
    </body>
</html>