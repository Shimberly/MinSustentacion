<?php
session_start();
?>
<?php
include_once("DronCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$marca = $_GET['NM'];
$num_serial = $_GET['NS'];
$id_empresa = $_GET['IE'];
$bateria_minutos = $_GET['MB'];

$DronCollectorObj = new DronCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Dron </title>
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
                <h1>MODIFICAR DRON</h1>
                <form class="login" method="post" action="save_update_mina.php">
                      <?php
                        echo "<label >Id_Dron</label>";

                        echo "<input type='text' name='id_dron' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >Marca </label>";
                        echo "<input type='text' name='marca' value='". $marca ."'>";
                        echo "<br>";
                    
                        echo "<label >Num. Serial </label>";
                        echo "<input type='text' name='marca' value='". $num_serial ."'>";
                        echo "<br>";
                    
                        echo "<label>Id_Empresa</label>";

                        echo "<select value='". $id_empresa ."' name='id_empresa'>";
                         foreach ($MinaCollectorObj->showMinas() as $c){
                            if ($id_empresa == $c->getIdEmpresa()){
                                echo "<option selected>". $c->getIdEmpresa()."</option>";
                            }else{   
                                echo "<option>". $c->getIdEmpresa()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";

                        echo "<label>Ubicacion &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $ubicacion ."' name='ubicacion'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_mina.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>