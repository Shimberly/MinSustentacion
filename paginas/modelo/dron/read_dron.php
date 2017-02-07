<?php
session_start();
?>
<?php
include_once("DronCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$DronCollectorObj = new DronCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Dron</title>
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
    
    
    <h1>TABLA DRON</h1>
    <a href="create_dron.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>MARCA</th>
            <th>NUM_SERIAL</th>
            <th>ID_EMPRESA</th>
            <th>MIN. BATERIA</th>
        </tr>
        <?php
            foreach ($DronCollectorObj->showDron() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdDron() . "</td>";
            echo "<td>" . $c->getMarca() . "</td>";             echo "<td>" . $c->getNumSerial() . "</td>";   
            echo "<td>" . $c->getMinBateria() . "</td>";   
            
            echo "<td><a href='update_dron.php?ID=". $c->getIdDron() ."&NM=". $c->getMarca() ."&NS=". $c->getNumSerial() ."&IE=". $c->getIdEmpresa() ."&MB=". $c->getMinBateria() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_mina.php?ID=". $c->getIdDron() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>