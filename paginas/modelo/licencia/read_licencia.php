<?php
session_start();
?>
<?php
include_once("licenciaCollector.php");
$usuario = $_SESSION['mineria'];
$id;

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
            echo "<a href='../../calidad.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>TABLA LICENCIA</h1>
    <a href="create_licencia.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>TIPO</th>
        </tr>
        <?php
            foreach ($licenciaCollectorObj->showLicencias() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdLicencia() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";             echo "<td>" . $c->getTipo() . "</td>";    
            
            echo "<td><a href='update_licencia.php?ID=". $c->getIdLicencia() ."&NM=". $c->getNombre() ."&IE=". $c->getTipo() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_licencia.php?ID=". $c->getIdLicencia() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>