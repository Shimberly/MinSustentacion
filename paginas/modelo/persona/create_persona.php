<?php
session_start();
?>
<?php
include_once("PersonaCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$PersonaCollectorObj = new PersonaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Persona </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_mina.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR USUARIO</h1>
                <form class="login" method="post" action="save_persona.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br>
		    <label >Apellido </label>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido">
                    <br>
		    <label >Email </label>
                    <input type="text" name="email" placeholder="Introduce tu email">
                    <br>
		    <label >Usuario </label>
                    <input type="text" name="usuario" placeholder="Introduce tu usuario">
                    <br>
		    <label >Clave </label>
                    <input type="text" name="clave" placeholder="Introduce tu clave">
                    <br>
		    <label >Ruc </label>
                    <input type="text" name="ruc" placeholder="Introduce tu ruc">
                    <br>
		
		     
                    <label>Id_Empresa</label>
                   
                    <?php
                     echo "<select name='id_empresa'>";
                     foreach ($PersonaCollectorObj->showPersonas() as $c){
                        echo "<option>". $c->getIdEmpresa()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>

		     <label>Id_Licencia</label>
                   
                    <?php
                     echo "<select name='id_licencia'>";
                     foreach ($PersonaCollectorObj->showPersonas() as $c){
                        echo "<option>". $c->getIdLicencia()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>
		     <label >Fecha Nacimiento </label>
                    <input type="text" name="fecn" placeholder="Fecha/nacimiento">
                    <br>
                    
                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>
