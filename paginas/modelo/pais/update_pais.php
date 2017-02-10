<?php
session_start();
?>
<?php
include_once("paisCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$nombre = $_GET['NM'];


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
            echo "<a href='leerPais.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR Pais</h1>
                <form class="login" method="post" action="save_update_pais.php">
                      <?php
                        echo "<label >Id Empresa</label>";

                        echo "<input type='text' name='id_pais' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >Nombre </label>";
                  
                    
                    
                        echo "<input type='text' name='nombre' value='". $nombre ."'>";

                        echo "<br>";

                    
                       
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_pais.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>
