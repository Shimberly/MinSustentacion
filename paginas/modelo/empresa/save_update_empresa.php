<?php
session_start();
include_once("empresaCollector.php");

$id = $_POST['id_empresa'];
$razonsocial = $_POST['razonsocial'];
$id_ciudad = $_POST['id_ciudad'];
$ruc = $_POST['ruc'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];


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
        echo "<p>Se modifico una nueva empresa</p>";
        $empresaCollectorObj->updateEmpresa($idEmpresa,$razonsocial,$ruc,$direccion,$telefono,$id_ciudad);
        ?>
        <a href="leerEmpresa.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
