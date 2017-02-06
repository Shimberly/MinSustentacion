<?php
session_start();
?>
<?php
include_once("MinaCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$MinaCollectorObj = new MinaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Mina </title>
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
                <h1>CREAR USUARIO</h1>
                <form class="login" method="post" action="save_mina.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">

                    <br>

                    <label>Id_Empresa</label>
                   
                    <?php
                     echo "<select name='id_empresa'>";
                     foreach ($MinaCollectorObj->showMinas() as $c){
                        echo "<option>". $c->getIdEmpresa()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>

                    <label>Ubicacion &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="ubicacion" placeholder="Introduce la ubicacion de la mina">

                    <br><br>
                    <button type="submit">Modificar</button>

                </form>
            </div>
    </body>
</html>