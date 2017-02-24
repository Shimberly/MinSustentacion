<?php
session_start();
include_once("empresaCollector.php");

$id = $_GET['ID'];


$empresaCollectorObj = new empresaCollector();
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
        echo "<p>Se elimino la ciudad #" . $id ." :c </p>";
        $empresaCollectorObj->deleteEmpresa($id);
        ?>
        <a href="leerEmpresa.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
