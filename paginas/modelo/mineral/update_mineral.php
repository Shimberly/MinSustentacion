<?php
session_start();
?>
<?php
include_once("mineralcollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$mineralcollectorObj = new mineralcollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Mineral </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_mineral.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR MINERAL</h1>
                <form class="login" method="post" action="save_mineral.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">

                    <br>

                    <label>Descripción &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="ubicacion" placeholder="Introduce la descripción del mineral">

                    <br><br>
                    <button type="submit">Modificar</button>

                </form>
            </div>
    </body>
</html>