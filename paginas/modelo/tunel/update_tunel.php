<?php
session_start();

include_once("../mina/MinaCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$extension = $_GET['EX'];
$id_mina = $_GET['IM'];
$num_frente = $_GET['NF'];

$MinaCollectorObj = new MinaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Tunel </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_tunel.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR TUNEL</h1>
                <form class="login" method="post" action="save_update_tunel.php">
                      <?php
                        echo "<label >Id_Tunel</label>";

                        echo "<input type='text' name='id_tunel' value='". $id ."' readonly>";

                        echo "<br>";

                        echo "<label >extension </label>";
                  
                    
                    
                        echo "<input type='text' name='extension' value='". $extension ."'>";

                        echo "<br>";

                        echo "<label>id_mina</label>";


                         echo "<select value='". $id_mina ."' name='id_mina'>";
                         foreach ($MinaCollectorObj->showMinas() as $c){
                            if ($id_mina == $c->getIdMina()){
                                echo "<option selected>". $c->getIdMina()."</option>";
                            }else{   
                                echo "<option>". $c->getIdMina()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";

                        echo "<label>num_frente &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $num_frente ."' name='num_frente'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_tunel.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>