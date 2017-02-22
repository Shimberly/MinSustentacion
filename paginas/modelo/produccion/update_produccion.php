<?php
session_start();
?>
<?php
include_once("produccioncollector.php");
$usuario = $_SESSION['mineria'];

$id_produccion = $_GET['id_produccion'];
$fecha = $_GET['fecha'];
$id_empresa = $_GET['id_empresa'];

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
                <h1>MODIFICAR produccion</h1>
                <form class="login" method="post" action="save_update_produccion.php">
                      <?php
                        echo "<label >Id_producción</label>";

                        echo "<input type='text' name='id_produccion' value='". $id_produccion ."' readonly>";

                        echo "<br>";

                        echo "<label >fecha </label>";
                  
                    
                    
                        echo "<input type='text' name='fecha' value='". $fecha ."'>";

                        echo "<br>";

                        echo "<label>Descripción &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $id_empresa ."' name='id_empresa'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_produccion.php?id_produccion=". $id_produccion ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>