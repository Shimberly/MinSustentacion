<?php
session_start();
?>
<?php
include_once("DetalleReporteCollector.php");
$usuario = $_SESSION['mineria'];
$id =1;

$DetalleReporteCollectorObj = new DetalleReporteCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase DetalleReporte </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_detalle_reporte.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR detalle produccion</h1>
                <form class="login" method="post" action="save_detalleReporte.php">
                    <label >id_dron </label>
     
                    <label>id_dron</label>
                   
                    <?php
                     echo "<select name='id_dron'>";
                     foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                        echo "<option>". $c->getid_dron()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>
                    
                    <label>id_tunel</label>
                   
                    <?php
                     echo "<select name='id_tunel'>";
                     foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                        echo "<option>". $c->getid_tunel()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>
                    <label>id_reporte</label>
                   
                    <?php
                     echo "<select name='id_reporte'>";
                     foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                        echo "<option>". $c->getid_reporte()."</option>";
                     }
                     echo "</select>";
                    ?>
                     <br>
                    <label>id_datos_tunel</label>
                   
                    <?php
                     echo "<select name='id_datos_tunel'>";
                     foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                        echo "<option>". $c->getid_datos_tunel()."</option>";
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
