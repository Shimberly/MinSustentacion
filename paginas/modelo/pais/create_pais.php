<?php
session_start();
?>
<?php
include_once("paisCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$paisCollectorObj = new paisCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Pais </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='leerPais.php'><button>Volver</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR PAIS</h1>
                <form class="login" method="post" action="save_pais.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce el nombre del pais">
                   
                    <br>
		
		
                    
                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>
