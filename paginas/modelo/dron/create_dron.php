<?php
session_start();
?>
<?php
include_once("DronCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

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
                <h1>CREAR DRON</h1>
                <form class="login" method="post" action="save_mina.php">
                    <label >Marca </label>
                    <input type="text" name="marca" placeholder="Introduce tu nombre">

                    <br>
                    <label >N° Serial </label>
                    <input type="text" name="numero" placeholder="Introduce tu nombre">

                    <br>

                    <label>Id_Empresa</label>
                   
                    <?php
                     echo "<select name='id_empresa'>";
                     foreach ($DronCollectorObj->showDron() as $c){
                        echo "<option>". $c->getIdDron()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>

                     <label >Min. Bateria </label>
                    <input type="text" name="minuto" placeholder="Introduce tu nombre">

                    <br>

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>