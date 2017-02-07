<?php
session_start();
include_once("mineralcollector.php");

$id_mineral = $_POST['id_mineral'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];


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
        echo "<p>Se modificó el mineral</p>";
        $mineralcollectorObj->updatemineral($id_mineral,$nombre,$descripcion);
        ?>
        <a href="read_mineral.php"><button>VOLVER</button></a>
       
  
    </body>
</html>