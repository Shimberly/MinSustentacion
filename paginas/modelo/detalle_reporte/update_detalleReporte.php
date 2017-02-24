<?php
session_start();
?>
<?php
include_once("DetalleReporteCollector.php");
$usuario = $_SESSION['mineria'];

$id_detalle_reporte = $_GET['id_detalle_reporte'];
$id_dron = $_GET['id_dron'];
$id_tunel = $_GET['id_tunel'];
$id_reporte = $_GET['id_tunel'];
$id_datos_tunel = $_GET['id_datos_tunel'];

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
            echo "<a href='read_detalleReporte.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR Detalle Reporte</h1>
                <form class="login" method="post" action="save_update_detalleReporte.php">
                      <?php


                        echo "<label>Id detalle reporte</label>";

                         echo "<select value='". $id_detalle_reporte ."' name='id_detalle_reporte'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_detalle_reporte == $c->getid_detalle_reporte()){
                                echo "<option selected>". $c->getid_detalle_reporte()."</option>";
                            }else{   
                                echo "<option>". $c->getid_detalle_reporte()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id dron</label>";

                         echo "<select value='". $id_dron ."' name='id_dron'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_dron == $c->getid_dron()){
                                echo "<option selected>". $c->getid_dron()."</option>";
                            }else{   
                                echo "<option>". $c->getid_dron()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id tunel</label>";

                         echo "<select value='". $id_tunel ."' name='id_tunel'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_tunel == $c->getid_tunel()){
                                echo "<option selected>". $c->getid_tunel()."</option>";
                            }else{   
                                echo "<option>". $c->getid_tunel()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id reporte</label>";

                         echo "<select value='". $id_reporte ."' name='id_reporte'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_reporte == $c->getid_reporte()){
                                echo "<option selected>". $c->getid_reporte()."</option>";
                            }else{   
                                echo "<option>". $c->getid_reporte()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                    
                    echo "<label>Id datos tunel</label>";

                         echo "<select value='". $id_datos_tunel ."' name='id_datos_tunel'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_datos_tunel == $c->getid_datos_tunel()){
                                echo "<option selected>". $c->getid_datos_tunel()."</option>";
                            }else{   
                                echo "<option>". $c->getid_datos_tunel()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                        

                        
                    ?>
                    <br><br>
                    <?php
                     echo "<a href='save_update_detalleReporte.php?id_detalle_reporte=". $id_detalle_reporte ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>
