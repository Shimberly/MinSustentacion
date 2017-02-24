<?php
session_start();
include_once("PersonaCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$ruc = $_POST['ruc'];
$id_empresa = $_POST['id_empresa'];
$id_licencia = $_POST['id_licencia'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];


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
        echo "<p>Se creo un  nuevo usuario </p>";
        $PersonaCollectorObj->createPersona($nombre,$apellido,$email,$usuario,$clave,$ruc,$id_empresa,$id_licencia,$fecha_nacimiento);
        ?>
        <a href="read_persona.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
