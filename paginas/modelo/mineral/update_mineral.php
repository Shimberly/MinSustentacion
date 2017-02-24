<?php
session_start();
?>
<?php
include_once("mineralcollector.php");
$usuario = $_SESSION['mineria'];

$id_mineral = $_GET['id_mineral'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];

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
                <h1>MODIFICAR MINERAL</h1>
                <form class="login" method="post" action="save_update_mineral.php">
                      <?php
                        echo "<label >Id_Mineral</label>";

                        echo "<input type='text' name='id_mineral' value='". $id_mineral ."' readonly>";

                        echo "<br>";

                        echo "<label >Nombre </label>";
                  
                    
                    
                        echo "<input type='text' name='nombre' value='". $nombre ."'>";

                        echo "<br>";

                        echo "<label>Descripción &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $descripcion ."' name='descripcion'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_mineral.php?id_mineral=". $id_mineral ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>