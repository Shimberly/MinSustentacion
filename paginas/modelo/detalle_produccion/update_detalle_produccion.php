<?php
session_start();
?>
<?php
include_once("detlle_produccioncollector.php");
$usuario = $_SESSION['mineria'];

$id_detlle_produccion = $_GET['id_detlle_produccion'];
$id_produccion = $_POST['id_produccion'];
$id_mineral = $_POST['id_mineral'];
$peso = $_POST['peso'];


$detlle_produccioncollectorObj = new detlle_produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase detlle_produccion </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_detlle_produccion.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR detlle_produccion</h1>
                <form class="login" method="post" action="save_update_detlle_produccion.php">
                      <?php
                        echo "<label >Id_detlle_produccion</label>";

                        echo "<input type='text' name='id_detlle_produccion' value='". $id_detlle_produccion ."' readonly>";

                        echo "<br>";

                        echo "<label >id_produccion </label>";
                  
                    
                    
                        echo "<input type='text' name='id_produccion' value='". $id_produccion ."'>";

                        echo "<br>";

                        echo "<label>id_mineral &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $id_mineral ."' name='id_mineral'>"
                            
                        echo "<br>";

                        echo "<label>peso &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $peso ."' name='peso'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_detlle_produccion.php?id_detlle_produccion=". $id_detlle_produccion ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>