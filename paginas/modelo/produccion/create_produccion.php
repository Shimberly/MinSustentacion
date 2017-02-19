<?php
session_start();
?>
<?php
include_once("produccioncollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$produccioncollectorObj = new produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase produccion </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_produccion.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR produccion</h1>
                <form class="login" method="post" action="save_produccion.php">
                    <label >Fecha </label>
                    <input type="text" name="fecha" placeholder="Introduce la fecha">

                    <br>

                    <label>id_empresa &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="id_empresa" placeholder="Introduce el id de la empresa">

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>