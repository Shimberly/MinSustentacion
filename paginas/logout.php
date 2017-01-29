<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario 1</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
	<h1>LOGOUT</h1>
	<?php

        if (isset($_SESSION['muñoz'])){
                session_destroy();
                echo "Se ha destruido la sesion";
                echo "<br><a href='index.php'><button>Volver<button></a>";
        }else{
                echo "Error";
                echo "<a href='index.php'><button>Volver<button></a>";

        }

	?>

    </body>
</html>

