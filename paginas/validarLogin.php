<?php
session_start();
include_once("var/html/www/ProyectoPSW2016Mineria/paginas/modelo/persona/PersonaCollector.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <p>Validando ...</p>
        <?php
		$email = $_POST['email'];
		$clave = $_POST['clave'];
        $existe = 0;
        
        $PersonaCollectorObj = new PersonaCollector();
        echo "<p>Buscando</p>";
        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getEmail() == $email && $c->getClave() == $clave){
                echo "<p>Encontreeee </p>";
                $existe = 1;
                $_SESSION['mineria']= $email;
		          //if (isset($_SESSION['mineria'])){
                    //echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=calidad.php'>";
                    
                 // }
            }else{
                echo "<p>No encontre :c </p>";
            }
        }
		
	   ?>
            
    </body>
</html>
