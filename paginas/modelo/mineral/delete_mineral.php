<?php
session_start();
include_once("mineralcollector.php");

$id_mineral = $_GET['id_mineral'];


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
		  if (isset($_SESSION['mineria'])){
   
        echo "<p>Se eliminó el índice #" . $id_mineral ."?</p>";
        $mineralcollectorObj->deletemineral($id_mineral);
         echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_mineral.php'>";
                            }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
  
  
    </body>
</html>