<?php
session_start();
?>
<?php
include_once("MinaCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$MinaCollectorObj = new MinaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Mina</title>
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
    
    
    <h1>TABLA MINA</h1>
    <a href="create_mina.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>ID_EMPRESA</th>
            <th>UBICACION</th>
        </tr>
        <?php
            foreach ($MinaCollectorObj->showMinas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdMina() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";             echo "<td>" . $c->getIdEmpresa() . "</td>";   
            echo "<td>" . $c->getUbicacion() . "</td>";   
            
            echo "<td><a href='update_mina.php'><button>Editar</button></a></td>";
            echo "<td><a href='delete_mina.php?ID=". $c->getIdMina() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
