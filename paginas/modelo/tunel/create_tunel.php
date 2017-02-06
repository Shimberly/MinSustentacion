<?php
session_start();
?>
<?php
include_once("../mina/MinaCollector.php");
$usuario = $_SESSION['mineria'];

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
                <h1>CREAR TUNEL</h1>
                <form class="login" method="post" action="save_tunel.php">
                    <label >Extensión</label>
                    <input type="text" name="extension" placeholder="Introduce la extensión">

                    <br>

                    

                    <label>Numero Frente &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="num_frente" placeholder="Introduce el numero de frente">
                    
                    <label>Mina</label>
                   
                    <?php
                     echo "<select name='id_mina'>";
                     foreach ($MinaCollectorObj->showMinas() as $c){
                        echo "<option>". $c->getIdMina()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>
                    
                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>