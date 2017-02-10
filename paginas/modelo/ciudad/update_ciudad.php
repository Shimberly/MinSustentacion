<?php
session_start();
?>
<?php
include_once("ciudadCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$nombre = $_GET['NM'];
$id_pais = 'IP';

$ciudadCollectorObj = new ciudadCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Ciudad </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='leerCiudad.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR CIUDAD</h1>
                <form class="login" method="post" action="save_update_ciudad.php">
                      <?php
                        echo "<label >Id Ciudad</label>";

                        echo "<input type='text' name='id_ciudad' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >Nombre </label>";
                  
                    
                    
                        echo "<input type='text' name='nombre' value='". $nombre ."'>";

                        echo "<br>";

                    
                        echo "<label>Id Pais</label>";


                         echo "<select value='". $id_pais ."' name='id_pais'>";
                         foreach ($ciudadCollectorObj->showCiudades() as $c){
                            if ($id_pais == $c->getIdPais()){
                                echo "<option selected>". $c->getIdPais()."</option>";
                            }else{   
                                echo "<option>". $c->getIdPais()."</option>";
                            }
                         }
                         echo "</select>";
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_ciudad.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>
