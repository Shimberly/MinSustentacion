<?php
session_start();
?>
<?php
include_once("ciudadCollector.php");
include_once("../pais/paisCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$ciudadCollectorObj = new ciudadCollector();
$paisCollectorObj = new paisCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Ciudad</title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='leerCiudad.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR Ciudad</h1>
                <form class="login" method="post" action="save_ciudad.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br>
		
		     
                   

		     <label>Id_Pais</label>
                   
                    <?php
                     echo "<select name='id_pais'>";
                     foreach ($paisCollectorObj->showPaises() as $c){
                        echo "<option>". $c->getIdPais()."</option>";
                     }
                     echo "</select>";
                    ?>
                     
                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>
