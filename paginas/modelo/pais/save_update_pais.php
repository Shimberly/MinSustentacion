<?php
session_start();
include_once("paisCollector.php");

$id = $_POST['id_pais'];
$nombre = $_POST['nombre'];



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
        echo "<p>Se modifico un nuevo pais</p>";
        $paisCollectorObj->updatePais($id,$nombre);
        ?>
        <a href="leerPais.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
