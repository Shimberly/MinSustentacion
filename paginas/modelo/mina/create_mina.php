<?php
session_start();
?>
<?php
include_once("DemoCollector.php");
$usuario = $_SESSION['muñoz'];
$id =1;

$DemoCollectorObj = new DemoCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Demo </title>
    <link rel="stylesheet" href="estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='logout.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR USUARIO</h1>
                <form class="login" method="post" action="save_Demo.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">

                    <br>

                    <label>Apellido &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido">

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>