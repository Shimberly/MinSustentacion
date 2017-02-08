<?php
session_start();
include_once("empresaCollector.php");

$razonSocial = $_POST['razonSocial'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$idCiudad = $_POST['idCiudad'];
$ruc = $_POST['ruc'];



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
        echo "<p>Se creo un  nueva Empresa </p>";
$empresaCollectorObj->createEmpresa($razonSocial,$ruc,$telefono,$direccion,$idCiudad);
        ?>
        <a href="leerEmpresa.php"><button>volver</button></a>
       
  
    </body>
</html>
