<?php
session_start();
?>
<?php
include_once("empresaCollector.php");
include_once("../ciudad/ciudadCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$empresaCollectorObj = new empresaCollector();

$ciudadCollectorObj = new ciudadCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Empresa</title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='leerEmpresa.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR Empresa</h1>
                <form class="login" method="post" action="save_empresa.php">
                    <label >Razon Social </label>
                    <input type="text" name="razonsocial">
                    <br>
		    <label >Ruc </label>
                    <input type="text" name="ruc" >
                    <br>
		    <label >Direccion </label>
                    <input type="text" name="direccion" >
                    <br>
		    <label >Telefono</label>
                    <input type="text" name="telefono">
            <br>
		     
                    <label>Id_Ciudad</label>
                   
                    <?php
                     echo "<select name='idCiudad'>";
                     foreach ($ciudadCollectorObj->showCiudades() as $c){
                        echo "<option>". $c->getIdCiudad()."</option>";
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
