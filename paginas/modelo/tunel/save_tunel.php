<?php
session_start();
include_once("TunelCollector.php");

$extension = $_POST['extension'];
$num_frente = $_POST['num_frente'];
$id_mina = $_POST['id_mina'];


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
        echo "<p>Se creo un nuevo Tunel</p>";
        $TunelCollectorObj->createTunel($extension,$num_frente,$id_mina);
        ?>
        <a href="read_tunel.php"><button>VOLVER</button></a>
       
  
    </body>
</html>