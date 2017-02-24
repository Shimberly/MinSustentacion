<?php
session_start();
?>
<?php
include_once("LicenciaCollector.php");
$licenciaCollectorObj = new licenciaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Licencia</title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_licencia.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR LICENCIA</h1>
                <form class="login" method="post" action="save_licencia.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">

                    <br>

                    <label>Tipo</label>
                   <input type="text" name="tipo" placeholder="Introduce el tipo a-e">

                     <br>

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>