<?php
session_start();
?>
<?php
include_once("LicenciaCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$nombre = $_GET['NM'];
$tipo = $_GET['TI'];

$LicenciaCollectorObj = new LicenciaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Licencia </title>
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
                <h1>MODIFICAR Licencia</h1>
                <form class="login" method="post" action="save_update_licencia.php">
                      <?php
                        echo "<label >Id_Licencia</label>";

                        echo "<input type='text' name='id_licencia' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >Nombre </label>";                                   
                       echo "<input type='text' name='nombre' value='". $nombre ."'>";

                        echo "<br>";
                    echo "<label >Tipo </label>";                                   
                       echo "<input type='text' name='tipo' value='". $tipo ."'>";

                        echo "<br>";


                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_licencia.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>