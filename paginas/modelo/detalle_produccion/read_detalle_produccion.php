<?php
session_start();
?>
<?php
include_once("detalle_produccioncollector.php");
$usuario = $_SESSION['mineria'];
$id;

$detalle_produccioncollectorObj = new detalle_produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase detalle_produccion</title>
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
    
    
    <h1>TABLA detalle_produccion</h1>
    <a href="create_detalle_produccion.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php
            foreach ($detalle_produccioncollectorObj->showdetalle_produccion() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_detalle_produccion() . "</td>";
            echo "<td>" . $c->getid_produccion() . "</td>";            
            echo "<td>" . $c->getid_mineral() . "</td>";
            echo "<td>" . $c->getpeso() . "</td>";
            
            echo "<td><a href='update_detalle_produccion.php?id_detalle_produccion=" . $c->getid_detalle_produccion() . "&nombre=" . $c->getid_produccion() . "&descripcion=" . $c->getid_mineral() . "'><button>Editar</button></a></td>";
            echo "<td><a href='delete_detalle_produccion.php?id_detalle_produccion=". $c->getid_detalle_produccion() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
