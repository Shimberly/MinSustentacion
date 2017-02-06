<?php
session_start();
include_once("TunelCollector.php");

$id = $_POST['id_tunel'];
$extension = $_POST['extension'];
$id_mina = $_POST['id_mina'];
$num_frente = $_POST['num_frente'];


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
        echo "<p>Se modifico una nueva Tunel</p>";
        $TunelCollectorObj->updateTunel($id,$extension,$num_frente,$id_mina);
        ?>
        <a href="read_tunel.php"><button>VOLVER</button></a>
       
  
    </body>
</html>