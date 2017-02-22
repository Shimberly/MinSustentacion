<?php
session_start();
?>
<?php
include_once("detalle_produccioncollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$detalle_produccioncollectorObj = new detalle_produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase detalle_produccion </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_detalle_produccion.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR detalle_produccion</h1>
                <form class="login" method="post" action="save_detalle_produccion.php">
                    <label >id_producción </label>
                    <input type="text" name="id_producción" placeholder="Introduce tu id_producción">

                    <br>

                    <label>id_mineral &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="id_mineral" placeholder="Introduce la descripción del id_mineral">
                    <br>

                    <label>peso &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="peso" placeholder="Introduce la descripción del peso">
                    

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>