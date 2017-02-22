<?php
session_start();
include_once("detalle_mineralcollector.php");

$id_detalle_mineral = $_POST['id_detalle_mineral'];
$id_produccion = $_POST['id_produccion'];
$id_mineral = $_POST['id_mineral'];
$peso = $_POST['peso'];


$detalle_mineralcollectorObj = new detalle_mineralcollector();
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
        echo "<p>Se modificó el detalle_mineral</p>";
        $detalle_mineralcollectorObj->updatedetalle_mineral($id_detalle_mineral,$id_produccion,$id_mineral,$peso);
        ?>
        <a href="read_detalle_mineral.php"><button>VOLVER</button></a>
       
  
    </body>
</html>