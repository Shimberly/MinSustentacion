<?php
session_start();
include_once("mineralcollector.php");

$id_mineral = $_GET['id_mineral'];


$mineralcollectorObj = new mineralcollector();
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
        echo "<p>Se eliminó el índice #" . $id_mineral ."?</p>";
        $mineralcollectorObj->deletemineral($id_mineral);
        ?>
        <a href="read_mineral.php"><button>VOLVER</button></a>
       
  
    </body>
</html>