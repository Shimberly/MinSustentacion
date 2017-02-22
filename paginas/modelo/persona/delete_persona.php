<?php
session_start();
include_once("PersonaCollector.php");

$id = $_GET['ID'];


$PersonaCollectorObj = new PersonaCollector();
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
        $PersonaCollectorObj->deletePersona($id);
        ?>
        <a href="read_persona.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
