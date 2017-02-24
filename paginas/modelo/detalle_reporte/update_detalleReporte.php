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
                        echo "<label >Id_DetalleReporte</label>";

                        echo "<input type='text' name='id_DetalleReporte' value='". $id ."' readonly>";
                        echo "<br>";

                        echo "<label >Nombre </label>";
                        echo "<input type='text' name='nombre' value='". $nombre ."'>";
                        echo "<br>";

		        echo "<label >Apellido </label>";
                        echo "<input type='text' name='apellido' value='". $apellido ."'>";
                        echo "<br>";

		        echo "<label >Email </label>";
                        echo "<input type='text' name='email' value='". $email ."'>";
                        echo "<br>";

		        echo "<label >Usuario</label>";
                        echo "<input type='text' name='usuario' value='". $usuario ."'>";
                        echo "<br>";

			echo "<label >Clave </label>";
                        echo "<input type='text' name='clave' value='". $clave ."'>";
                        echo "<br>";

		        echo "<label >Ruc </label>";
                        echo "<input type='text' name='ruc' value='". $ruc ."'>";
                        echo "<br>";

                        echo "<label>Id_Empresa</label>";

                         echo "<select value='". $id_empresa ."' name='id_empresa'>";
                         foreach ($DetalleReporteCollectorObj->showDetalleReportes() as $c){
                            if ($id_empresa == $c->getIdEmpresa()){
                                echo "<option selected>". $c->getIdEmpresa()."</option>";
                            }else{   
                                echo "<option>". $c->getIdEmpresa()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";
                        
                     echo "<label >Fecha Nacimiento</label>";
                        echo "<input type='text' name='fecha' value='". $fecha_nacimiento ."'>";
                        echo "<br>";
                        
                    ?>
                    <br><br>
                    <?php
                     echo "<a href='save_update_DetalleReporte.php?ID=". $id ."'><button type='submit'>Modificars</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>
