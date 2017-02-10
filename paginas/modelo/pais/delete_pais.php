<?php
session_start();
include_once("paisCollector.php");

$id = $_GET['ID'];


$paisCollectorObj = new paisCollector();
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
        echo "<p>Se elimino el pais #" . $id ." :c </p>";
        $paisCollectorObj->deletePais($id);
        ?>
        <a href="leerPais.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
