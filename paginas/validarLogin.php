<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
		$email = $_POST['email'];
		$clave = $_POST['clave'];

		
		$_SESSION['mineria']= $email;
		if (isset($_SESSION['mineria'])){
	      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=calidad.php'>";
   		}
	   ?>
            
    </head>
    <body>
	
    </body>
</html>
